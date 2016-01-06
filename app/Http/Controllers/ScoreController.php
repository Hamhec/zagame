<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Response;
use App\Match;
use App\Concept;

class ScoreController extends Controller
{
    public function getMatches() {
      $user = Auth::user();
      $matches = Match::whereNotNull('opponent_user_id')->where('user_id', $user->id)
                ->orWhere('opponent_user_id', $user->id)
                ->orderBy('updated_at', 'desc')->get();
      $matches->load('concept');
      $matches->load('opponent');
      return $matches;
    }

    public function getTotalScore() {
      $user = Auth::user();
      return $user->matches()->sum('score');
    }

    public function getScore(Request $request) {
      $user = Auth::user();

      // Get the last match I closed
      $closed_match = Match::where('concept_id', $request->input('concept_score'))
                      ->where('opponent_user_id', $user->id)
                      ->orderBy('updated_at', 'desc')->get()->first();
      // Get the last match I opened
      $opened_match = Match::where('concept_id', $request->input('concept_score'))
                      ->where('user_id', $user->id)
                      ->orderBy('updated_at', 'desc')->get()->first();


      if(($closed_match == null) || (($opened_match != null) && ($opened_match->updated_at > $closed_match->updated_at))) { // Opened a match
        if($opened_match->opponent_user_id == null) { // no one closed my opened match
          $user_associations = $this->getAssociationsForUser($opened_match->concept_id, $user);
          return Response::json([
            'match' => $opened_match,
            'user_associations' => $user_associations]);
        }
        $match = $opened_match;
        $opponent = $match->opponent;
      } else { // closed a match
        $match = $closed_match;
        $opponent = $match->user;
      }
      // calculate matchmaking
      $matching = $user->calculateMatching($opponent, $request->input('domain_id'));

      $concept = $match->concept;
      // Load the user's associations
      $user_associations = $this->getAssociationsForUser($concept->id, $user);
      // load the opponent answers and asoociations
      $opponent_associations = $this->getAssociationsForUser($concept->id, $opponent);

      $total_score = 0;
      // calclating Score:
      foreach($user_associations->associations as $user_association) {
        $user_association->opponent_association = null;
        $user_association->opponent_degree = 85.0;
        foreach($opponent_associations->associations as $opponent_association) {
          // calculate levenshtein distance
          similar_text(strtoupper($user_association->associated_concept->name),
          strtoupper($opponent_association->associated_concept->name), $similarity);
          // keep the higher one
          if($similarity > $user_association->opponent_degree) {
            $user_association->opponent_degree = $similarity;
            $user_association->opponent_association = $opponent_association;
          }
        }

        // if there is a similarity
        if($user_association->opponent_association != null) {
          $score = 100;
          $score -= abs($user_association->weight - $user_association->opponent_association->weight) * 5;

          // take into account similarity
          $score *= $user_association->opponent_degree / 100;

          // take into account Appreciation
          $user_appreciation = null;
          $opponent_appreciation = null;
          if($user_association->associated_concept->appreciations->count() > 0)
            $user_appreciation = $user_association->associated_concept->appreciations->first()->appreciation;

          if($user_association->opponent_association->associated_concept->appreciations->count() > 0)
            $opponent_appreciation = $user_association->opponent_association->associated_concept->appreciations->first()->appreciation;

          if($user_appreciation != null && $opponent_appreciation != null) {
            $score -= abs($user_appreciation - $opponent_appreciation) * 10;
          } else {
            $score -= 3 * 10;
          }

          // take into account Matchmaking
          $score += 5 * (1 - $matching) * 10;

          // add it to total score:
          $user_association->score = floor($score);
          $total_score += $score;
        }
      }
      $total_score = floor($total_score);
      // 1pts for participation
      $total_score += 1;
      if($match->score == null) {
        $match->score = $total_score;
        $match->save();
      }
      $match->score = $total_score;

      return Response::json(['matching' => $matching,
        'match' => $match,
        'opponent' => $opponent,
        'user_associations' => $user_associations,
        'opponent_associations' => $opponent_associations]);
    }

    public function getAssociationsForUser($concept_id, $player) {
      $concept = Concept::find($concept_id);
      $concept->load(['associations' => function($query) use ($player) {
        $query->where('user_id', $player->id);
      }]);
      $concept->load(['appreciations' => function($query) use ($player){
        $query->where('user_id', $player->id);
      }]);

      foreach($concept->associations as $association) {
        $association->load(['associated_concept.appreciations' => function($query) use ($player){
          $query->where('user_id', $player->id);
        }]);
      }
      $concept->associations = $concept->associations->sortBy('weight');
      return $concept;
    }
}

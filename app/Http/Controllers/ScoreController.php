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
    public function getScore(Request $request) {
      $user = Auth::user();

      // Get the last match I closed
      $closed_match = Match::where('concept_id', $request->input('concept_score'))
                      ->where('opponent_user_id', $user->id)
                      ->orderBy('updated_at')->get()->first();
      // Get the last match I opened
      $opened_match = Match::where('concept_id', $request->input('concept_score'))
                      ->where('user_id', $user->id)
                      ->orderBy('updated_at')->get()->first();

      if($closed_match == null || ($opened_match != null && $opened_match->updated_at > $closed_match->updated_at)) { // Opened a match
        if($opened_match->opponent_user_id == null) { // no one closed my opened match
          return Response::json(['match' => null]);
        }
        $match = $opened_match;
        $opponent = $match->opponent;
      } else { // closed a match
        $match = $closed_match;
        $opponent = $match->user;
      }
      // calculate score
      $matching = $user->calculateMatching($opponent, $request->input('domain_id'));

      $concept = $match->concept;
      // Load the user's associations
      $user_associations = $this->getAssociationsForUser($concept->id, $user);
      // load the opponent answers and asoociations
      $opponent_associations = $this->getAssociationsForUser($concept->id, $opponent);


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

      $concept->associations->load('associated_concept.appreciations');

      return $concept;
    }
}

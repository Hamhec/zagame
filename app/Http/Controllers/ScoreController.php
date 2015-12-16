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

      $match = Match::find($request->input('match_id'));

      // calculate score
      $matching = $user->calculateMatching($match->user, $request->input('domain_id'));
      // close the match
      $match->opponent_user_id = $user->id;
      $match->save();

      $opponent = $match->user;
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

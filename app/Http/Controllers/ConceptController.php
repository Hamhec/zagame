<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Domain;
use App\Association;
use App\Appreciation;
use App\Concept;
use App\Match;
use Auth;
use Response;

class ConceptController extends Controller
{

    public function getConcepts(Request $request) {
      $domain = Domain::findOrFail($request->input('id'));
      // Get concepts where the player never played
      $concepts = $domain->concepts()->whereNotExists(function ($query) {
        $query->select('score')->from('matches')
              ->where('user_id', Auth::user()->id)
              ->orWhere('opponent_user_id', Auth::user()->id);
      })->get();

      // If all concepts have been played, then just get them all
      if($concepts->isEmpty()) {
        $concepts = $domain->concepts;
      }

      // Grab a random concept
      $concept = $concepts->random();

      $concept->load(['associations' => function($query) {
        $query->where('user_id', Auth::user()->id);
      }]);
      $concept->load(['appreciations' => function($query) {
        $query->where('user_id', Auth::user()->id);
      }]);

      $concept->associations->load('associated_concept.appreciations');

      //$concepts->associations->associated_concept->load()
      return $concept;
    }

    public function addConcept(Request $request) {
      return Concept::create($request->all());
    }

    public function saveAssociations(Request $request) {
      $user = Auth::user();
      $domain_id = $request->input('domain_id');
      $inputs = $request->input('associations');
      $main_concept = Concept::find($inputs[0]['concept_id']);

      // Remove all existing associations for the concept and user
      Association::where('user_id', $user->id)->where('concept_id', $main_concept->id)->delete();

      $associations = array();
      foreach ($inputs as $association) {
        // Adding the entred concepts
        $concept = Concept::create($association['associated_concept']);
        // Adding the associations
        $associations[] = Association::create([
          'user_id' => $user->id,
          'concept_id' => $association['concept_id'],
          'weight' => $association['weight'],
          'associated_concept_id' => $concept->id,
        ]);
        // Adding the appreciations if exists
        if(isset($association['associated_concept']['appreciations']) && isset($association['associated_concept']['appreciations'][0])) {
          Appreciation::create([
            'user_id' => $user->id,
            'concept_id' => $concept->id,
            'appreciation' => $association['associated_concept']['appreciations'][0]['appreciation'],
          ]);
        }
      }

      // Look if there is an open match
      $match = Match::where('concept_id', $main_concept->id)
                    ->where('user_id', '<>', $user->id)
                    ->whereNull('opponent_user_id')->get()->first();

      // if there is no open match then sorry :(
      if(!$match) {
        // create a match
        if(!Match::where('concept_id', $main_concept->id)
                      ->where('user_id', $user->id)
                      ->whereNull('opponent_user_id')->get()->first()) { // if there is no open match by the same user for the same concept
          Match::create([
            'user_id' => $user->id,
            'concept_id' => $main_concept->id
          ]);
      }
        return Response::json(['flash' => 'No opponent found. your answers will be saved, and you will be notifed when an other player challenges them ;) .',
                                'nomatch' => true]);
      }

      // there is an open match!
      return Response::json(['match_id' => $match->id]);
    }


}

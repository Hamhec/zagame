<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Domain;
use App\User;
use Response;
use Auth;
use DB;

class ProfileController extends Controller
{
    // Profiles of a specifique domain
    public function index(Request $request) {
      $domain = Domain::findOrFail($request->input('id'));
      $domain->load('profiles.possible_values');

      return $domain->profiles;
    }

    public function answeredProfiles(Request $request) {
      $domain_id = $request->input('id');
      $user = Auth::user();

      $profiles_ids = array();
      $profiles_ids_query = DB::table('domain_profile')->select('profile_id')
                                                 ->where('domain_id', $domain_id)->get();
      foreach($profiles_ids_query as $id) {
        $profiles_ids[] = $id->profile_id;
      }

      $profiles = $user->profiles()->whereIn('id', $profiles_ids)->get();
      return $profiles;
    }

    public function saveAnswers(Request $request) {
      $profiles = $request->all();
      $user = Auth::user();

      // TODO: Handle the case where infinite (i.e. no possible values);
      foreach($profiles as $profile) {
        // clear any previous answer
        $user->profiles()->detach($profile['id']);
        // save answer
        $user->profiles()->attach($profile['id'], ['profile_possible_value_id' => $profile['answer']]);
      }

      return Response::json(null, 200);
    }
}

<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Auth;
use DB;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password', 'birthdate', 'image', 'help'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
    * Get the the appreciations made by this user
    */
    public function appreciations() {
      return $this->hasMany('App\Appreciation');
    }

    /**
    * Get the the associations made by this user
    */
    public function associations() {
      return $this->hasMany('App\Association');
    }

    /**
    * Get the matches that this user started
    */
    public function opened_matches() {
      return $this->hasMany('App\Match');
    }

    /**
    * Get matches that were finished by this user
    */
    public function closed_matches() {
      return $this->hasMany('App\Match', 'opponent_user_id');
    }

    /*
    * Get all the matches that he ever played
    */
    public function matches() {
      return $this->opened_matches->merge($this->closed_matches);
    }

    /*
    * profile answers that this user made
    */
    public function profiles() {
      return $this->belongsToMany('App\Profile', 'user_profile_answers')->withPivot('answer', 'profile_possible_value_id')->withTimestamps();
    }

    public function calculateMatching($user, $domain_id) {
      // get my profiles and answers for this domain
      $first_profiles = $this->profilesForDomain($this, $domain_id);

      // get the other player profiles and answeres for this domain
      $second_profiles = $this->profilesForDomain($user, $domain_id);
      // compare the two
      $total = 0;
      $match_score = 0;
      foreach($first_profiles as $first_profile) {
        $second_profile = $second_profiles->where('id', $first_profile->id)->first();
        // get the importance fo this profile
        $importance = $first_profile->domains->first()->pivot->importance;
        $importance_value = 0; // we assue it's not important
        if ($importance == 1) $importance_value = 1; // A little important
        else if ($importance == 2) $importance_value = 10; // Somewhat important
        else if ($importance == 3) $importance_value = 50; // Very important
        else if ($importance == 4) $importance_value = 250; // Mandatory

        // add that to the total possible
        $total += $importance_value;
        if($first_profile->pivot->profile_possible_value_id == $second_profile->pivot->profile_possible_value_id) {
          $match_score += $importance_value;
        }
      }
      return ($match_score / $total);
    }


    public static function profilesForDomain($user, $domain_id) {
      $profiles_ids = array();
      $profiles_ids_query = DB::table('domain_profile')->select('profile_id')
                                                 ->where('domain_id', $domain_id)->get();
      foreach($profiles_ids_query as $id) {
        $profiles_ids[] = $id->profile_id;
      }

      $profiles = $user->profiles()->whereIn('id', $profiles_ids)->get();
      // load the domain to get the importance
      $profiles->load(['domains' => function($query) use ($domain_id) {
        $query->where('id', $domain_id);
      }]);
      return $profiles;
    }
}

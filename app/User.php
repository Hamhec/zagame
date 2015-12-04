<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

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
    protected $fillable = ['username', 'email', 'password', 'birthdate', 'image'];

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
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['designation', 'question', 'infinite', 'domain_id'];

    /*
    * Prevent laravel from adding timestamps
    */
    public $timestamps = false;

    /**
    * Get the user that made this association
    */
    public function domain() {
      return $this->belongsTo('App\Domain');
    }

    /**
    * Get the the profile possible values
    */
    public function possible_values() {
      return $this->hasMany('App\ProfilePossibleValue');
    }

    /*
    * Get the users answers to this profile
    */
    public function users() {
      return $this->belongsToMany('App\User', 'user_profile_answers')->withPivot('answer', 'profile_possible_value_id')->withTimestamps();
    }
}

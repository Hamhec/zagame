<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilePossibleValue extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profile_possible_values';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['value', 'profile_id'];

    /*
    * Prevent laravel from adding timestamps
    */
    public $timestamps = false;

    /**
    * Get the user that made this association
    */
    public function profile() {
      return $this->belongsTo('App\Profile');
    }
}

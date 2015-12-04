<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'matches';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['score', 'user_id', 'opponent_user_id', 'concept_id', 'created_at', 'updated_at'];

    /**
    * Get the user that started this match
    */
    public function user() {
      return $this->belongsTo('App\User');
    }

    /**
    * Get the user that finished (closed) this match
    */
    public function opponent() {
      return $this->belongsTo('App\User', 'opponent_user_id');
    }

    /**
    * Get the concept of this match
    */
    public function concept() {
      return $this->belongsTo('App\Concept');
    }
}

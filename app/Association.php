<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'associations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['weight', 'user_id', 'concept_id', 'associated_concept_id', 'created_at', 'updated_at'];

    /**
    * Get the user that made this association
    */
    public function user() {
      return $this->belongsTo('App\User');
    }

    /**
    * Get the concept of this association
    */
    public function concept() {
      return $this->belongsTo('App\Concept');
    }

    /**
    * Get the the concept associated with the first concept
    */
    public function associated_concept() {
      return $this->belongsTo('App\Concept', 'associated_concept_id');
    }
}

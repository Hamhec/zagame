<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'concepts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'image', 'description', 'created_at', 'updated_at'];

    /**
    * Get the the appreciations made for this concept
    */
    public function appreciations() {
      return $this->hasMany('App\Appreciation');
    }

    /**
    * Get the associations of this concept
    */
    public function associations() {
      return $this->hasMany('App\Association');
    }

    /**
    * Get the associations of this concept
    */
    public function associations_with() {
      return $this->hasMany('App\Association', 'associated_concept_id');
    }

    /**
    * Get the matches about this concept
    */
    public function matches() {
      return $this->hasMany('App\Match');
    }

    /*
    * Get the domains that contain this concept
    */
    public function domains() {
      return $this->belongsToMany('App\Domain', 'concept_domain');
    }
}

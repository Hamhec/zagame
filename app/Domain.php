<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'domains';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'text', 'image'];

    /*
    * Prevent laravel from adding timestamps
    */
    public $timestamps = false;

    /*
    * Get the concepts that belong to this domain
    */
    public function concepts() {
      return $this->belongsToMany('App\Concept', 'concept_domain');
    }

    /*
    * The profiles that belong to this domain
    */
    public function profiles() {
      return $this->belongsToMany('App\Profile', 'domain_profile')->withPivot('importance');
    }
}

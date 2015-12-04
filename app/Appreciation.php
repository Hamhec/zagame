<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appreciation extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'appreciations';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['appreciation', 'user_id', 'concept_id', 'created_at', 'updated_at'];

  /**
  * Get the user that made this appreciation
  */
  public function user() {
    return $this->belongsTo('App\User');
  }

  /**
  * Get the concept that this appreciation is for
  */
  public function concept() {
    return $this->belongsTo('App\Concept');
  }
}

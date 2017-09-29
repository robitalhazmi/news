<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_rubric extends Model
{
  protected $fillable = [
    'id', 'users_id', 'rubrics_id'
  ];
  public $timestamps = false;

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function rubric()
  {
    return $this->belongsTo('App\Rubric');
  }
}

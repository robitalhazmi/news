<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
  protected $fillable = [
    'id', 'name'
  ];
  public $timestamps = false;

  public function users_rubrics()
  {
    return $this->hasMany('App\Users_rubric');
  }
}

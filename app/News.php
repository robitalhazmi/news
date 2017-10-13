<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $fillable = [
    'id', 'title', 'description', 'created_at', 'users_rubrics_id'
  ];

  public function users_rubric()
  {
    return $this->belongsTo('App\Users_rubric');
  }
}

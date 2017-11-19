<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breaking extends Model
{
  protected $fillable = [
    'id', 'news_id'
  ];

  public $timestamps = false;

  public function news()
  {
    return $this->belongsTo('App\News');
  }
}

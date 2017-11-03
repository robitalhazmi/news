<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
  protected $fillable = [
    'id', 'news_id'
  ];

  public function news()
  {
    return $this->belongsTo('App\News');
  }
}

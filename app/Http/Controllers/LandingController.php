<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Banner;

class LandingController extends Controller
{
    public function __contruct()
    {

    }

    public function getLanding()
    {
      $banners = Banner::join('news', 'banners.news_id', '=', 'news.id')
                ->join('users_rubrics', 'news.users_rubrics_id', '=', 'users_rubrics.id')
                ->join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')
                ->join('users', 'users_rubrics.users_id', '=', 'users.id')
                ->select('news.id', 'rubrics.name', 'news.title', 'news.description', 'news.created_at', 'users.username')
                ->get();
      $news[1] = News::join('users_rubrics', 'news.users_rubrics_id', '=', 'users_rubrics.id')
                       ->join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')
                       ->where('users_rubrics.rubrics_id', 2)
                       ->get();
      return view('landing', compact('banners', 'news'));
    }

    public function getNews(Request $request)
    {
      $news = News::join('users_rubrics', 'news.users_rubrics_id', '=', 'users_rubrics.id')
              ->join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')
              ->join('users', 'users_rubrics.users_id', '=', 'users.id')
              ->where('news.id', $request->id)
              ->select('news.id', 'rubrics.name', 'news.title', 'news.description', 'news.content',  'news.created_at', 'users.username')
              ->first();
      return view('single', compact('news'));
    }
}

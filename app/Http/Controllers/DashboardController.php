<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users_rubric;
use Auth;
use App\News;
use App\User;

class DashboardController extends Controller
{
  public function __contruct()
  {
    $this->middleware('auth');
  }

  public function getDashboard()
  {
    $users_rubrics = Users_rubric::join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')
                                 ->where('users_rubrics.users_id', Auth::user()->id)
                                 ->get();
    $news = News::join('users_rubrics', 'news.users_rubrics_id', '=', 'users_rubrics.id')
            ->join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')
            ->where('users_rubrics.users_id', Auth::user()->id)
            ->select('news.id', 'rubrics.name', 'news.title', 'news.description', 'news.created_at')
            ->get();
    return view('dashboard', compact('users_rubrics', 'news'));
  }

  public function addNews(Request $request)
  {
    $users_rubrics_id = $request->rubric;
    $title = $request->title;
    $description = $request->description;
    $content = $request->content;

    $users_rubric = Users_rubric::where('users_id', Auth::user()->id)
                                  ->where('rubrics_id', $users_rubrics_id)
                                  ->first();

    $news = new News();
    $news->title = $title;
    $news->description = $description;
    $news->content = $content;
    $news->users_rubrics_id = $users_rubric->id;
    $news->save();

    return response()->json([
      'success' => true,
      'message' => 'Berhasil menambahkan berita.'
    ]);
  }
}

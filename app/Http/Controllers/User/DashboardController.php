<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Users_rubric;
use Auth;
use App\News;
use App\User;
use App\Http\Controllers\Controller;

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
            ->select('news.id', 'news.image','rubrics.name', 'news.title', 'news.description', 'news.created_at')
            ->get();
    return view('user.dashboard', compact('users_rubrics', 'news'));
  }

  public function getMyNews()
  {
    $users_rubrics = Users_rubric::join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')
                                 ->where('users_rubrics.users_id', Auth::user()->id)
                                 ->get();
    $news = News::join('users_rubrics', 'news.users_rubrics_id', '=', 'users_rubrics.id')
            ->join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')
            ->where('users_rubrics.users_id', Auth::user()->id)
            ->select('news.id', 'news.image','rubrics.name', 'news.title', 'news.description', 'news.created_at')
            ->get();
    return view('user.myNews', compact('users_rubrics', 'news'));
  }

  public function addNews(Request $request)
  {
    $title = $request->title;
    $users_rubrics_id = $request->rubric;

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
    // News::where('id', $news->id)->update([
    //   'image' => $filename,
    // ]);

    return response()->json([
      'success' => true,
      'message' => 'Berhasil menambahkan berita.'
    ]);
  }

  public function imageNews(Request $request)
  {

    $id = $request->id;
    $news = News::where('id', $id)->first();
    $filename = $news->image = $id.".jpg";
    $news->save();
    $request->file('imageNews')->storeAs('public/imageNews/', $filename);

    return redirect()->route('user.dashboard');
  }
}

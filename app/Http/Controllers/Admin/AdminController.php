<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Users_rubric;
use Auth;
use App\News;
use App\Breaking;
use App\Banner;
use App\Rubric;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
  function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function getCategory()
  {
    $categories = Rubric::get();
    return view ('admin.category', compact('categories'));
  }

  public function getUser()
  {
    $users = User::where('username', '!=', 'admin')->get();
    $users_rubrics = Users_rubric::join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')->get();
    $rubrics = Rubric::get();
    return view('admin.user', compact('users', 'users_rubrics', 'rubrics'));
  }

  public function getNews()
  {
    $news = News::join('users_rubrics', 'news.users_rubrics_id', '=', 'users_rubrics.id')
            ->join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')
            ->join('users', 'users_rubrics.users_id', '=', 'users.id')
            ->select('news.id', 'rubrics.name', 'news.title', 'news.description', 'news.created_at', 'users.username')
            ->get();
    return view('admin.news', compact('news'));
  }

  public function getBreaking()
  {
    $news = News::join('users_rubrics', 'news.users_rubrics_id', '=', 'users_rubrics.id')
            ->join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')
            ->join('users', 'users_rubrics.users_id', '=', 'users.id')
            ->select('news.id', 'rubrics.name', 'news.title', 'news.description', 'news.created_at', 'users.username')
            ->get();
    $breakings = Breaking::join('news', 'breakings.news_id', '=', 'news.id')
              ->join('users_rubrics', 'news.users_rubrics_id', '=', 'users_rubrics.id')
              ->join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')
              ->join('users', 'users_rubrics.users_id', '=', 'users.id')
              ->select('news.id', 'rubrics.name', 'news.title', 'news.description', 'news.created_at', 'users.username')
              ->get();
    return view('admin.breaking', compact('news', 'breakings'));
  }

  public function getBanner()
  {
    $news = News::join('users_rubrics', 'news.users_rubrics_id', '=', 'users_rubrics.id')
            ->join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')
            ->join('users', 'users_rubrics.users_id', '=', 'users.id')
            ->select('news.id', 'rubrics.name', 'news.title', 'news.description', 'news.created_at', 'users.username')
            ->get();
    $banners = Banner::join('news', 'banners.news_id', '=', 'news.id')
              ->join('users_rubrics', 'news.users_rubrics_id', '=', 'users_rubrics.id')
              ->join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')
              ->join('users', 'users_rubrics.users_id', '=', 'users.id')
              ->select('news.id', 'rubrics.name', 'news.title', 'news.description', 'news.created_at', 'users.username')
              ->get();
    return view('admin.banner', compact('news', 'banners'));
  }

  public function addCategory(Request $request)
  {
    $name = $request->category;
    $rubric = New Rubric();
    $rubric->name = $name;
    $rubric->save();
    return response()->json([
      'success' => true
    ]);
  }

  public function addUser(Request $request)
  {
    $username = $request->username;
    $password = $request->password;
    $confirm_password = $request->confirm_password;

    $category = Rubric::count();
    $rubric = $request->rubric;

    $checkUser = User::where('username', $username)->count();
    if ($password == $confirm_password) {
      if ($checkUser == 0) {
        $user = new User();
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->save();
        for ($i=0; $i < count($rubric); $i++) {
          if ($rubric[$i] != null) {
            $user_rubric[$i] = new Users_rubric();
            $user_rubric[$i]->users_id = $user->id;
            $user_rubric[$i]->rubrics_id = $rubric[$i];
            $user_rubric[$i]->save();
          }
        }
        return response()->json([
          'success'  => true,
          'message' => 'Pengguna berhasil ditambahkan.'
        ]);
      }
      else {
        return response()->json([
          'success'  => false,
          'message' => 'Nama pengguna sudah digunakan'
        ]);
      }
    }
    else {
      return response()->json([
        'success'  => false,
        'message' => 'Kata sandi konfirmasi tidak sesuai'
      ]);
    }
  }

  public function addBreaking(Request $request)
  {
    $id = $request->id;
    $breaking = new Breaking();
    $breaking->news_id = $id;
    $breaking->save();

    return response()->json([
      'succes' => true
    ]);
  }

  public function addBanner(Request $request)
  {
    $id = $request->id;
    $banner = new Banner();
    $banner->news_id = $id;
    $banner->save();

    return response()->json([
      'succes' => true
    ]);
  }
}

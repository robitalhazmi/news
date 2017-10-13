<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Users_rubric;
use Auth;

class AdminController extends Controller
{
  function __construct()
  {
    $this->middleware('auth');
  }

  public function getAdmin()
  {
    if (Auth::user()->username == 'admin') {
      $users = User::where('username', '!=', 'admin')->get();
      $users_rubrics = Users_rubric::join('rubrics', 'users_rubrics.rubrics_id', '=', 'rubrics.id')->get();
      return view('admin', compact('users', 'users_rubrics'));
    }
    return redirect()->route('login');
  }

  public function addUser(Request $request)
  {
    $username = $request->username;
    $password = $request->password;
    $confirm_password = $request->confirm_password;

    $check = $request->check;
    $rubric[0] = $request->rubric1;
    $rubric[1] = $request->rubric2;
    $rubric[2] = $request->rubric3;
    $rubric[3] = $request->rubric4;
    $rubric[4] = $request->rubric5;
    $rubric[5] = $request->rubric6;
    $rubric[6] = $request->rubric7;
    $rubric[7] = $request->rubric8;
    $rubric[8] = $request->breaking_news;

    $checkUser = User::where('username', $username)->count();
    if ($password == $confirm_password) {
      if ($checkUser == 0) {
        $user = new User();
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->save();
        for ($i=0; $i < 9; $i++) {
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
}

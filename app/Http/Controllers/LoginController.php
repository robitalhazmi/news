<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function __contruct()
    {

    }

    public function getLogin()
    {
      if (!Auth::check()) {
        return view('login');
      }
      else {
        if (Auth::user()->username == 'admin') {
          return redirect()->route('admin');
        }
        else{
            return redirect()->route('dashboard');
        }
      }
    }

    public function postLogin(Request $request)
    {
      $username = $request->username;
      $password = $request->password;

      if (Auth::attempt(['username' => $username, 'password' => $password])) {
        return response()->json(['success'=> true]);
      }
      else {
        return response()->json(['error'=>true, 'message' => 'Nama Pengguna atau Kata Sandi yang anda masukkan salah']);
      }
    }

    public function getLogout(){
      Auth::logout();
      return redirect('login');
    }
}

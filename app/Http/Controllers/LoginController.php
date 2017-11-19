<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __contruct()
    {
      $this->middleware('guest');
    }

    public function getLogin()
    {
      return view('login');
    }

    public function postLogin(Request $request)
    {
      $validator = $this->validator($request->all());
      $username = $request->username;
      $password = $request->password;
      if($validator->fails()){
        return response()->json(['error'=>true]);
      }
      else {
        $user = User::where('username', $username)->first();
        if (!empty($user)) {
          if (Hash::check($password, $user->password)) {
            if ($username == "admin") {
              Auth::guard('admin')->attempt(['username' => $username, 'password' => $password]);
              return response()->json([
                'success' =>  true,
                'url'     =>  "admin"
              ]);
            }
            else {
              $this->guard()->attempt(['username' => $username, 'password' => $password]);
              return response()->json([
                'success' =>  true,
                'url'     =>  "dashboard"
              ]);
            }
          }
          else {
            return response()->json(['error'=>true, 'message' => 'Nama Pengguna atau Kata Sandi yang anda masukkan salah']);
          }
        }
        else {
          return response()->json(['error'=>true, 'message' => 'Nama Pengguna atau Kata Sandi yang anda masukkan salah']);
        }

      }

    }

    public function validator(array $data){
      $rules = [
        'username'  => 'required|string',
        'password'  => 'required|string',
      ];
      return Validator::make($data,$rules);
    }

    public function getLogout(Request $request){
      //Auth::logout();
      $this->guard()->logout();
      $request->session()->flush();
      $request->session()->regenerate();
      return redirect()->route('login');
    }

    protected function guard()
    {
        return Auth::guard();
    }
}

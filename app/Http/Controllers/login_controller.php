<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\users;
use App\CategoryAssets;
use App\assets;
use App\AssetItems;


class login_controller extends Controller
{
      public function login(Request $request)
   {

    $username = $request->get("username");
    $password = $request->get("password");



     if(Auth::attempt(['username' => $request['username'], 'password' => $request['password'] ] ) )
     {
        Session::put('username',$request['username']);
        Session::put('user_id',auth()->id());

        return redirect('/dashboard');

     }else{

     return redirect('/')->with('incorrect', 'Incorrect Username or password!');
   }
   }

   public function logout()
   {
    Session::flush();
    Auth::logout();
    return redirect('/');
   }
}

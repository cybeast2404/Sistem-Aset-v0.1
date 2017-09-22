<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\users;
use App\Http\Middleware;

class modification extends Controller
{

    public function __construct()
    {
        $this->middleware('CheckPassword')->only('update');

    }

    public function index()
    {
        $id = auth()->id();

    	$users = users::find($id);

    	return view('crud.edit_auth.authentication',compact('users','id'));
    }
    public function update(Request $request,$id)
    {
        $users = users::find($id);

    	$usernameform  = $request->get('username');
    	$passwordform  = bcrypt($request->get('password'));
 
    	$users->username = $usernameform;
    	$users->password = $passwordform;
    	$users->save();
        

    		return redirect('/dashboard')->with('success','penukaran telah berjaya dilakukan !');
    		


    	}
    	
    
}

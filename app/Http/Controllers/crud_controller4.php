<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\user_profiles;

class crud_controller4 extends Controller
{
    //Admin controller

    public function index()
    {
    $cruditems = user_profiles::paginate(8);
    return view('crud.admin.admin_list', compact('cruditems'));
    }

    public function show($id)
    {
    	$crud = users::find($id);

    	$crud2 = user_profiles::select('user_profiles.staff_no','user_profiles.name','user_profiles.tel_no')
    	->join('users','users.id','=','user_profiles.id')
    	->where('user_profiles.user_id','=',1)
    	->get();

        return view('crud.admin.view_admin', compact('crud','id','crud2'));
    }

    public function edit($id)
    {

    	$crud = users::find($id);
       
        $crud2 = user_profiles::select('user_profiles.user_id','user_profiles.staff_no','user_profiles.name','user_profiles.tel_no')
        ->join('users','users.id','=','user_profiles.user_id')
        ->where('user_profiles.user_id','=',$id)
        ->get();

        return view('crud.admin.edit_admin', compact('crud','id','crud2'));

    }

    public function update(Request $request,$id)
    {

        $crud2 = user_profiles::find($id);

        $crud2->staff_no = $request->get('staff_no');
        $crud2->name     = $request->get('name');
        $crud2->tel_no   = $request->get('tel_no');

        $crud2->save();


        return redirect('/dashboard/admin')->with('success','succesfully registered!');
        //grab id from user
    }

    public function destroy($id)
    {
      $crud1 = user_profiles::find($id);  
      $crud1->delete();
      $crud2 = users::find($id);
      $crud2->delete();
      return redirect('dashboard/admin');
  }


}

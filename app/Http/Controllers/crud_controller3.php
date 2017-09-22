<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category_assets;
use DB;

class crud_controller3 extends Controller
{
     public function index()
    {
    $cruditems = category_assets::paginate(8);

    //$countrow = DB::table('category_assets');
    //$count = $countrow->count();

    return view('crud.category.category_list', compact('cruditems','count'));
    }
    public function show($id)
    {
    	$crud = category_assets::find($id);

        return view('crud.category.view_category', compact('crud','id'));
    }

    public function edit($id)
    {

    	$crud = category_assets::find($id);
        return view('crud.category.edit_category', compact('crud','id'));

    }

    public function update(Request $request,$id)
    {
    	$crud = category_assets::find($id);
        $crud->name 	   = $request->get('name');
        $crud->description = $request->get('description');
        $crud->save();

        return redirect('dashboard/category');
    }

    public function destroy($id)
    {
      $crud = category_assets::find($id);
      $crud->delete();
      return redirect('dashboard/category');
  }

}

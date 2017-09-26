<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryAssets;
use DB;

class CategoryAssetsController extends Controller
{
     public function index()
    {
    $cruditems = CategoryAssets::paginate(8);

    //$countrow = DB::table('CategoryAssets');
    //$count = $countrow->count();

    return view('crud.category.category_list', compact('cruditems','count'));
    }
    public function show($id)
    {
    	$crud = CategoryAssets::find($id);

        return view('crud.category.view_category', compact('crud','id'));
    }

    public function edit($id)
    {

    	$crud = CategoryAssets::find($id);
        return view('crud.category.edit_category', compact('crud','id'));

    }

    public function update(Request $request,$id)
    {
    	$crud = CategoryAssets::find($id);
        $crud->name 	   = $request->get('name');
        $crud->description = $request->get('description');
        $crud->save();

        return redirect('dashboard/category');
    }

    public function destroy($id)
    {
      $crud = CategoryAssets::find($id);
      $crud->delete();
      return redirect('dashboard/category');
  }

}

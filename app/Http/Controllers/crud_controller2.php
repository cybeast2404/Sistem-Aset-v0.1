<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\assets;
use App\CategoryAssets;

use DB;

class crud_controller2 extends Controller
{
    //middleware
    public function __construct()
    {
        //$this->middleware('CheckAsset')->only('update');
    }
    //asset list
    public function index()
    {
    $cruditems = assets::paginate(8);
    return view('crud.asset.asset_list', compact('cruditems'));
    }

     public function show($id)
    {

    	$crud = assets::find($id);

        $crud2 = CategoryAssets::select('category_assets.name')
        ->join('assets','assets.category_id','=','category_assets.id')
        ->where('assets.id','=',$id)
        ->get();

        return view('crud.asset.view_asset', compact('crud','id','crud2'));
    }

    public function edit($id)
    {


        //extract all data based on id
    	$crud = assets::find($id);
        //list all category in asset forms
        $crud2 = CategoryAssets::get();
        //current category name
        $crud3 = CategoryAssets::select('category_assets.name')
        ->join('assets','assets.category_id','=','category_assets.id')
        ->where('assets.id','=',$id)
        ->get();

        return view('crud.asset.edit_asset', compact('crud','id','crud3','crud2'));
    }

    public function update(Request $request,$id)
    {
    	$crud = assets::find($id);

        $crud->category_id = $request->get('category_id');
        $crud->name        = $request->get('name');
        $crud->description = $request->get('description');
        $crud->save();

        return redirect('dashboard/asset');
    }

    public function destroy($id)
    {
      $crud = assets::find($id);
      $crud->delete();
      return redirect('dashboard/asset');
  }
}

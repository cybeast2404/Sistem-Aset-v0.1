<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\asset_items;

//asset item CRUD
class crud_controller1 extends Controller
{
     
//extract all crud table attributes in array
	
    public function index()
    {
    $cruditems = asset_items::paginate(8);
    return view('crud.item.item_list', compact('cruditems'));
    }
    public function show($id)
    {
    	$crud = asset_items::find($id);
        return view('crud.item.view_asset_items', compact('crud','id'));
    }

    public function edit($id)
    {

    	$crud = asset_items::find($id);
        return view('crud.item.edit_asset_items', compact('crud','id'));

    }

    public function update(Request $request,$id)
    {
    	$crud = asset_items::find($id);
        $crud->asset_no = $request->get('asset_no');
        $crud->location = $request->get('location');
        $crud->price    = $request->get('price');
        $crud->date_purchase = $request->get('date_purchase');
        $crud->save();
        return redirect('dashboard/item');
    }

    public function destroy($id)
    {
      $crud = asset_items::find($id);
      $crud->delete();
      return redirect('dashboard/item');
  }

  public function back()
  {

  }

}

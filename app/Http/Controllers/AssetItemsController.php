<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssetItems;


class AssetItemsController extends Controller
{

//extract all crud table attributes in array
	//asset item list
    public function index()
    {
    $cruditems = AssetItems::paginate(8);
    return view('crud.item.item_list', compact('cruditems'));
    }
    public function show($id)
    {
    	$crud = AssetItems::find($id);
        return view('crud.item.view_AssetItems', compact('crud','id'));
    }

    public function edit($id)
    {

    	$crud = AssetItems::find($id);
        return view('crud.item.edit_AssetItems', compact('crud','id'));

    }

    public function update(Request $request,$id)
    {
    	$crud = AssetItems::find($id);
        $crud->asset_no = $request->get('asset_no');
        $crud->location = $request->get('location');
        $crud->price    = $request->get('price');
        $crud->date_purchase = $request->get('date_purchase');
        $crud->save();
        return redirect('dashboard/item');
    }

    public function destroy($id)
    {
      $crud = AssetItems::find($id);
      $crud->delete();
      return redirect('dashboard/item');
  }

  public function back()
  {

  }

}

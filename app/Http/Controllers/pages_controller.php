<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\assets;
use App\AssetItems;

class pages_controller extends Controller
{
    public function dashboard()
    {
    	if(session('username')) {

         $assets 	= DB::table('assets')->count();
         $items 	= DB::table('asset_items')->count();

         //cost this month
         $cost = DB::table('asset_items')
         ->whereMonth('created_at',date('m'))
         ->sum('asset_items.price');

         //cost this year
         $costyear = DB::table('asset_items')
         ->whereYear('created_at',date('Y'))
         ->sum('asset_items.price');

         //l = list
         $l_asset = assets::paginate(5);
         $l_items = asset_items::paginate(5);



	return view('dashboard',compact('users'))->with(array(

          'assets'    =>$assets,
          'items'     =>$items,
          'costmonth' =>$cost,
          'costyear'  =>$costyear,
          'l_asset'   =>$l_asset,
          'l_items'   =>$l_items,
          ));

		}
        else {

        return redirect('/');
        }
    }

    public function category_register()
    {
    	if(session('username')) {

    	return view('asset_category');

    	}
    	else
        {
        return redirect('/');
        }
    }

    public function asset_register()
    {
    	if(session('username')) {

    	$query = DB::select('select * from category_assets');
		return view('asset_new',['query'=>$query]);

    	} else {

    	return redirect('/');

    	}

    }

    public function item_register()
    {
    	if(session('username')) {

    	$query = DB::select('select id,name from assets');
	    return view('asset_item',['query'=>$query]);
    	} else {

    	return redirect('/');

    	}
    }

    public function admin_register()
    {
    	if(session('username')) {

    	return view('admin_registration');

    	} else {

    	return redirect('/');

    	}

    }




}

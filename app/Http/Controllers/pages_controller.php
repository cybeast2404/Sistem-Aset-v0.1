<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\assets;
use App\asset_items;
use App\category_assets;
use App\user_profiles;
use Illuminate\Support\Facades\Session;

class pages_controller extends Controller
{

    public function first_time_register()
    {
      $firstime = users::select('user_profiles.id')->get();

      if(!$firstime->count())
      {
        return view('first_time');
      } else{
        return with('404, page not found');
      }
    }

    public function login()
    {
        //this variable will check if admin is available or not . if it available,
        //it will redirect to login page without register new admin.
        //please use users model later.
        $firstime = users::select('user_profiles.id')->get();

        if(!$firstime->count())
        {
            return view('First_mainpage');
        } else {
          //This variable controlling the version digit.
          $version = '0.3';

          Session::put('version',$version);

            return view('login');
        }
    }

    public function dashboard()
    {
    	if(session('username')) {

        // $assets 	= DB::table('assets')->count();
       //  $items 	= DB::table('asset_items')->count();

           $assets = assets::count();
           $items  = asset_items::count();

         //cost this month
         $cost = asset_items::whereMonth('created_at',date('m'))
         ->sum('asset_items.price');

         //cost this year
         $costyear = asset_items::whereYear('created_at',date('Y'))
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

    	$query = category_assets::select()->get();
		return view('asset_new',['query'=>$query]);

    	} else {

    	return redirect('/');	
    	
    	}

    }

    public function item_register()
    {
    	if(session('username')) {

    	$query = assets::select('assets.id','assets.name');
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

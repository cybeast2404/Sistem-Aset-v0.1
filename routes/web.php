<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\users;
use App\category_assets;
use App\assets;
use App\asset_items;

//Middleware 
use App\Http\Middleware\CheckAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//URL Route
Route::get('/', function () {
    return view('login');
});

//dashboard
Route::get('/dashboard',function(){

        
       // Session::put('idadmin', auth()->id());
        //get id from users
        // $idput = Session::put('idauth',auth()->id());



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
          //'id'        =>$id,

  
         
          ));

});

//asset category
Route::get('dashboard/asset-category-registration',function(){
	return view('asset_category');
});

//asset registration 
Route::get('dashboard/asset-registration',function(){

	$query = DB::select('select * from category_assets');
	return view('asset_new',['query'=>$query]);
});

//asset item registration
Route::get('dashboard/asset-item-registration',function(){
	
	$query = DB::select('select id,name from assets');
	return view('asset_item',['query'=>$query]);
});

//admin registration
Route::get('dashboard/admin-registration/',function(){
	return view('admin_registration');
});

//Username and password modification
Route::get('dashboard/authentication','modification@index');


//Processing route ///////////////////////////////////////////////////

//login proccess
Route::post('login','login_controller@login');

//logout proccess
Route::get('logout','login_controller@logout');

//admin registration process
Route::post('dashboard/register-process','registration_controller@register_admin')->middleware('CheckAdmin');

//category asset registration
Route::post('dashboard/register-category','registration_controller@register_category_asset')->middleware('CheckCategory');

//new asset registration
Route::post('dashboard/register-new-asset','registration_controller@register_asset_new')->middleware('CheckAsset');

//new asset item registration
Route::post('dashboard/register-new-asset-item','registration_controller@register_asset_item')->middleware('CheckItem');

//CRUD system(item list)
Route::resource('dashboard/item', 'crud_controller1');

//CRUD system(asset)
Route::resource('dashboard/asset', 'crud_controller2');

//CRUD system(category)
Route::resource('dashboard/category','crud_controller3');

//CRUD system(admin)
Route::resource('dashboard/admin','crud_controller4');

//UPDATE system(password)
Route::resource('dashboard/authentication','modification');

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
Route::get('/dashboard','pages_controller@dashboard');
//asset category
Route::get('dashboard/asset-category-registration','pages_controller@category_register');
//asset registration 
Route::get('dashboard/asset-registration','pages_controller@asset_register');
//asset item registration
Route::get('dashboard/asset-item-registration','pages_controller@item_register');
//admin registration
Route::get('dashboard/admin-registration','pages_controller@admin_register');
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

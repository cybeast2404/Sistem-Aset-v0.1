<?php

namespace App\Http\Controllers;

//call model that want to make a request 
use App\users;
use App\user_profiles;
use App\category_assets;
use App\assets;
use App\asset_items;    //this class are not exist
//

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class registration_controller extends Controller
{
    
    public function __construct()
    {

      //  $this->middleware('CheckCategory')->only('register_category_asset');


    }

//Admin registration
    public function register_admin(Request $request)
    {
    	//from user model
    	$username = $request['username'];
    	$password = bcrypt($request['password']);
    	$email    = $request['email'];


    	//key-in data in user table
    	$user_primary = new users();

    	$user_primary->username = $username;
    	$user_primary->password = $password;
        $user_primary->email    = $email;
       
        //from user_profiles model
        $staff_no = $request['staff_no'];
        $name     = $request['name'];
        $tel_no   = $request['tel_no'];


        //save data through database
        $user_primary->save();
        //grab id from user
        $id_from_user = $user_primary->id;

        //key-in data in user_profile table
    	$user_profile = new user_profiles();

    	$user_profile->user_id  = $id_from_user;
    	$user_profile->staff_no = $staff_no;
        $user_profile->name     = $name;
    	$user_profile->tel_no	= $tel_no;
       
    	//save data through database
    	
        $user_profile->save();

    	return redirect('/dashboard')->with('statement','succesfully registered!');

    }

    //register asset category
    public function register_category_asset(Request $request)
    {
        //from category-asset model
        $name           = $request['category_type'];
        $description    = $request['description'];

        $category = new category_assets();
        $category->name        = $name;
        $category->description = $description;

        $category->save();

        return redirect('/dashboard')->with('success','succesfully registered asset category!');
    }

    //register new asset
     public function register_asset_new(Request $request)
    {
        //from category-asset model
        $asset_name            = $request['asset_name'];
        $description           = $request['description'];
        $category_id           = $request['category_id'];
        

        $asset = new assets();

        $asset->    name        = $asset_name;
        $asset->    description = $description;
        $asset->    category_id = $category_id;

        $asset->save();

        return redirect('/dashboard')->with('success','succesfully registered new asset!');
    }

//register asset item
     public function register_asset_item(Request $request)
    {
        //from asset-item model
        $asset_id       = $request['asset_id'];
        $asset_no       = $request['asset_no'];
        $location       = $request['location'];
        $price          = $request['price'];
        $date_purchase  = $request['date_purchase'];
        

        $asset_item = new asset_items();
        $asset_item->asset_id        = $asset_id;
        $asset_item->asset_no        = $asset_no;
        $asset_item->location        = $location;
        $asset_item->price           = $price;
        $asset_item->date_purchase   = $date_purchase;

        $asset_item->save();

         return redirect('/dashboard')->with('success','succesfully registered new item!');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{


    protected $fillable = [

    'category_id','name','description',

    ];

    protected $hidden = [

    'remember_token',

    ];


	public function AssetItems()
	{
		return $this->hasMany(AssetItems::class);
	}

    public function CategoryAssets()
    {
        return $this->belongsToMany(CategoryAssets::class);
    }


}

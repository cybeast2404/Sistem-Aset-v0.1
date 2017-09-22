<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assets extends Model
{
    

    protected $fillable = [

    'category_id','name','description',

    ];

    protected $hidden = [

    'remember_token',

    ];


	public function asset_items()
	{
		return $this->hasMany(asset_items::class);
	}

    public function category_assets()
    {
        return $this->belongsToMany(category_assets::class);
    }


}

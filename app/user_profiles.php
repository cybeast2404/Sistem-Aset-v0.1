<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_profiles extends Model
{


    protected $fillable = [

    'staff_no','name','tel_no',

    ];

    protected $hidden = [
        'remember_token',
    ];

	public function users()
	{
		return $this->belongsTo(users::class);
	}

}

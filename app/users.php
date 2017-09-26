<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends User
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','password','email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function UserProfiles()
    {
     return $this->hasOne(UserProfiles::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_assets extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function assets()
    {
       return $this->hasMany(assets::class);
    }
}

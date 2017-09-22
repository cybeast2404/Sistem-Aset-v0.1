<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asset_items extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'asset_no','location','date_purchase','price'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    protected $dates = [
    'created_at','updated_at'
    ];

    public function assets()
    {
        return $this->belongsTo(assets::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $table = 'category';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
         
    ];

    public $timestamps = false;

    public function post(){
        return $this->hasmany('App\Models\Product','category_id')->limit(3);
    }

    public function get(){
        return $this->hasmany('App\Models\News','category_id');
    }

    public function productLimit()
    {
        return $this->hasMany('App\Models\Product', 'category_id');
    }
     public function allproductLimit()
    {
        return $this->hasMany('App\Models\Product', 'category_id');
    }
}

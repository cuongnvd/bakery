<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
       protected $table = 'news';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'title','summary','images','content','sent_date','category_id','newsspecial','specialsavorenews','specialpromotionnews'
         
    ];

    public $timestamps = false;

     public function getnewsspecialAttribute($value )
    {
        $payments = 'không';
        if($value == true){
            $payments  = 'có';
        }

        return $payments ;
    }

     public function getspecialsavorenewsAttribute($value )
    {
        $payments = 'không';
        if($value == true){
            $payments  = 'có';
        }

        return $payments ;
    }
    public function getspecialpromotionnewsAttribute($value )
    {
        $payments = 'không';
        if($value == true){
            $payments  = 'có';
        }

        return $payments ;
    }
}

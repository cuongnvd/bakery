<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','ingredient','images','content','cost','category_id','producthot','productnew','note',
         
    ];

    public $timestamps = false;

    public function getCostAttribute($value )
    {	
    	if ($value != null){
    		return number_format("$value",0,",","." );
    	}
    	else if ($value != null){ 
    		return 'VND';
    		}
    return 'Liên Hệ 0961.920.004';
		}
    

    public function getproducthotAttribute($value )
    {
        $payments = 'không';
        if($value == true){
            $payments  = 'có';
        }

        return $payments ;
    }
     public function getproductnewAttribute($value )
    {
        $payments = 'không';
        if($value == true){
            $payments  = 'có';
        }

        return $payments ;
    }


}


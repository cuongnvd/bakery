<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailPromotion extends Model
{
        protected $table = 'emailpromotion';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
         
    ];

    public $timestamps = false;

}

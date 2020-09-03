<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactNews extends Model
{
    protected $table = 'contactnews';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name','email','content'
         
    ];

    public $timestamps = false;

}

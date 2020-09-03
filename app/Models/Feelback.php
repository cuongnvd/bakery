<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feelback extends Model
{
    protected $table = 'feelback';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','images','content','date',
         
    ];

    public $timestamps = false;

  
}

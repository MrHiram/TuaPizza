<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price3L', 'price1L', 'price600ml', 'picture',
    ];
}

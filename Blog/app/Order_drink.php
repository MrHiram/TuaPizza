<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_drink extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'drink_id', 'quantity', 'total',
    ];
}

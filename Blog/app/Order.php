<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Order extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'pizza_id', 'direction', 'phone',
    ];
    public function getNextId()
    {

        $statement = DB::select("show table status like 'orders'");

        return $statement[0]->Auto_increment;
    }
}

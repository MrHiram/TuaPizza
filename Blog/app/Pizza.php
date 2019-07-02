<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pizza extends Model
{
    protected $fillable = [
        'base_price', 'total_price', 'picture',
    ];
    public function getNextId()
    {

        $statement = DB::select("show table status like 'pizzas'");

        return $statement[0]->Auto_increment;
    }
}

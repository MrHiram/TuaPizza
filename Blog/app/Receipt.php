<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    //
    protected $fillable = [
        'order_id', 'user_id', 'total', 'express',
    ];
    public function getNextId()
    {

        $statement = DB::select("show table status like 'receipts'");

        return $statement[0]->Auto_increment;
    }
}

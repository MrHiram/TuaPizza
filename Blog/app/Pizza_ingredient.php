<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pizza_ingredient extends Model
{
    protected $fillable = [
        'pizza_id', 'ingredient_id',
    ];
}

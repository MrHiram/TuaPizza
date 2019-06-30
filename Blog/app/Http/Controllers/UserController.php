<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Ingredient;
use App\User;

class UserController extends Controller
{
    protected function authenticated() {
        if (Auth::check()) {
            if(Auth::user()->role==1){
            $ingredientsDB = Ingredient::All();
             return view('admin', compact('ingredientsDB'));
            }else{
              
            return view('index');  
            }
        }else{
            return view('index');
        }
    }
    
}

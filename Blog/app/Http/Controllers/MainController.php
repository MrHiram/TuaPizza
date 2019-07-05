<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Ingredient;
use App\Drink;
use App\Receipt;
use App\Order;
use App\Order_drink;
use App\Pizza;
use App\Pizza_ingredient;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createU()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function userProfile(){
        $receiptDB = Receipt::where('user_id', Auth::user()->id)->get();
        $orderDB = Order::where('user_id', Auth::user()->id)->get();
        $pizzaDB = [];
        foreach ($orderDB as $order) {
            array_push($pizzaDB, Pizza::where('id', $order['pizza_id'])->get());
        }
        $pizzaIngredientDB = [];
        foreach ($pizzaDB as $pizza) {
            array_push($pizzaIngredientDB, Pizza_ingredient::where('pizza_id', $pizza[0]['id'])->get());
        }
        $ingredientDB = Ingredient::All();
        $orderDrinksDB = Order_drink::All();
        $drinksDB = Drink::All();
        return view('profile', compact('receiptDB', 'orderDB', 'orderDrinksDB','drinksDB','pizzaDB','pizzaIngredientDB','ingredientDB'));
    }
    public function authenticator(){
        return view('authenticator');
    }
    public function menu(){
        return view('menu');
    }
    public function about(){
        return view('about');
    }
    public function create(){
        $ingredientsDB = Ingredient::All();
        $drinksDB = Drink::All();
        return view('create', compact('ingredientsDB', 'drinksDB'));
    }
   
}

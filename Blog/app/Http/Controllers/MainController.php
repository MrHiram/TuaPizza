<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
use App\Drink;
use App\Receipt;
use App\Order;
use App\Order_drink;

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
        $receiptDB = Receipt::All();    
        $orderDB = Order::All();
        $orderDrinksDB = Order_drink::All();
        $drinksDB = Drink::All();
        return view('profile', compact('receiptDB', 'orderDB', 'orderDrinksDB','drinksDB'));
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

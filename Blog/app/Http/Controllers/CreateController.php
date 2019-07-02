<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\Ingredient;
use App\Pizza_ingredient;

class CreateController extends Controller
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
    public function create()
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
    public function submitOrder(Request $request){
        $basePrice = 5;
        $totalPrice = 0;
        $data  = $request->all();
        $pizza = new Pizza();
        $pizzaIngredientIndex = Ingredient::All();
        $nextId = $pizza->getNextId();
        $pizza -> save();
        foreach ($data['ingredientList'] as $ing) {
            $pizzaIngredient = new Pizza_ingredient();
            $pizzaIngredient->pizza_id = $nextId;
            foreach ($pizzaIngredientIndex as $ingIndex) {
                if($ingIndex->tag_id == $ing){
                    $pizzaIngredient->ingredient_id = $ingIndex->id;
                    $totalPrice += $ingIndex->price;
                }
            }
            $pizzaIngredient->save();
        }
        $totalPrice += $basePrice;
        Pizza::whereId($nextId)->update(['total_price' => $totalPrice,'base_price' => $basePrice]);
        return  $request;
    }
}

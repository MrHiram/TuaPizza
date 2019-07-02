<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pizza;
use App\Ingredient;
use App\Pizza_ingredient;
use App\Order;
use App\Order_drink;

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
        $pizzaNextId = $pizza->getNextId();
        $pizza -> save();
        if (array_key_exists('ingredientList', $data)) {
            foreach ($data['ingredientList'] as $ing) {
                $pizzaIngredient = new Pizza_ingredient();
                $pizzaIngredient->pizza_id = $pizzaNextId;
                foreach ($pizzaIngredientIndex as $ingIndex) {
                    if($ingIndex->tag_id == $ing){
                        $pizzaIngredient->ingredient_id = $ingIndex->id;
                        $totalPrice += $ingIndex->price;
                    }
                }
                $pizzaIngredient->save();
            }
        }
        $totalPrice += $basePrice;
        Pizza::whereId($pizzaNextId)->update(['total_price' => $totalPrice,'base_price' => $basePrice]);

        $order = new Order();
        if(Auth::check()){
            $order->user_id = Auth::user()->id;
        }else{
            $order->user_id = 4;
        }
        $order->pizza_id = $pizzaNextId;
        $direction = $data['directionList'][0].' '.$data['directionList'][1].' '.$data['directionList'][2];
        $order->direction = $direction;
        $order->phone = $data['directionList'][3];
        $orderNextId = $order->getNextId();
        $order->save();

        if(array_key_exists('drinksList', $data)){
            $orderDrink = new Order_drink();
            $orderDrink->order_id = $orderNextId;
            $orderDrink->drink_id = $data['drinksList'][0]+1;
            $orderDrink->quantity = $data['drinksList'][2];
            switch ($data['drinksList'][1]) {
                case '1':
                    $orderDrink->total = $data['drinksList'][2]*4;
                    break;
                case '2':
                    $orderDrink->total = $data['drinksList'][2]*2;
                    break;
                case '3':
                    $orderDrink->total = $data['drinksList'][2]*1;
                    break;            
            }
            $orderDrink->save();
        }
        return  $request;
    }
}

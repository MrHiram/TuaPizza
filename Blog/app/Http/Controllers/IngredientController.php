<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
use Validator;
class IngredientController extends Controller
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
        $data = $request->all();
        /*$ingredient = new Ingredient;
        $ingredient->name=$request->input('name');
        $ingredient->price=$request->input('price');

        $ingredient->btn_picture='btn_picture';
        $ingredient->pizza_picture='pizza_picture';

        $ingredient->category=$request->input('category');
        $ingredient->save();*/

        return $data;
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
        Ingredient::findOrFail($id)->delete();
        return redirect('/admin')->with('success', '¡Eliminado con exito!');
    }
    public function submitIngredient(Request $request){
        $validator = Validator::make($request->all(),
            [
                'btn_picture' => 'image',
                'pizza_picture' => 'image',
            ],
            [
                'btn_picture.image' => 'png',
                'pizza_picture.image' => 'png',
            ]);
        if ($validator->fails())
            return array(
                'fail' => true,
                'errors' => $validator->errors()
        );
        $ingredient = new Ingredient;
        $ingredient->name=$request->input('name');
        $ingredient->price=$request->input('price');
        
        $filename = uniqid() . '_' . time() . '.' . 'png';
        
        $ingredient->btn_picture=$filename;
        $request->file('btn_picture')->move('img', $filename);
        
        $filename = uniqid() . '_' . time() . '.' . 'png';

        $ingredient->pizza_picture=$filename;
        $request->file('pizza_picture')->move('img', $filename);

        $ingredient->category=$request->input('category');
        $ingredient->save();
       
        return  redirect('/Admin')->with('success', '¡Guardado exitosamente!');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $ingredient = Ingredient::findOrFail($id);
        return view('edit', compact('ingredient'));
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
        $ingredient = Ingredient::findOrFail($id);
        $filePath = 'img/'.$ingredient->btn_picture;
        File::delete($filePath);
        $filePath = 'img/'.$ingredient->pizza_picture;
        File::delete($filePath);
        Ingredient::whereId($id)->update(['deleted' => 'y']);
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
        $ingredient->tag_id=uniqid();
        $ingredient->z_index=$request->input('order');
        
        $filename = uniqid() . '_' . time() . '.' . 'png';
        
        $ingredient->btn_picture=$filename;
        $request->file('btn_picture')->move('img', $filename);
        
        $filename = uniqid() . '_' . time() . '.' . 'png';

        $ingredient->pizza_picture=$filename;
        $request->file('pizza_picture')->move('img', $filename);

        $ingredient->category=$request->input('category');
        $ingredient->save();
       
        return response()->json(['¡Guardado exitosamente!']);
    }
    public function updateIngredient(Request $request)
    {
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
        if($request->file('btn_picture') != null && $request->file('btn_picture') != null){
            $filePath = 'img/'.$request->btn_picture;
            File::delete($filePath);
            $filePath = 'img/'.$request->pizza_picture;
            File::delete($filePath);


            $filename = uniqid() . '_' . time() . '.' . 'png';
            $request->btn_picture=$filename;
            $request->file('btn_picture')->move('img', $filename);
            Ingredient::whereId($request->id)->update(['btn_picture' => $filename]);

            $filename = uniqid() . '_' . time() . '.' . 'png';
            $request->pizza_picture=$filename;
            $request->file('pizza_picture')->move('img', $filename);
            Ingredient::whereId($request->id)->update(['pizza_picture' => $filename]);
        }
        $validateData = $request->validate([
            'name' =>'required|max:100',
            'price' =>'required|max:100',
            'category' =>'required||max:100',
            'z_index' =>'required||max:20',
        ]);            

        Ingredient::whereId($request->id)->update($validateData);
    
        return response()->json(['¡Actualizado con éxito!']);
    }
}
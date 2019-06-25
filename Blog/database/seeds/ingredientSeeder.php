<?php

use Illuminate\Database\Seeder;
use app\Ingredient;

class ingredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = [
            ['Chile verde','','',],
            ['Aceitunas','','',],
            ['Hongos','','',],
            ['Pepinillos','','',],
            ['Cebolla morada','','',],
            ['Tomate','','',],
            ['Limon','','',],
            ['Manzana','','',],
            ['Piña','','',],
            ['Albahaca','','',],
            ['Culantro','','',],
            ['Pollo','','',],
            ['Carne molida','','',],
            ['Tocineta','','',],
            ['Salchicha','','',],
            ['Pepperoni','','',],
            ['Cheddar','','',],
            ['Mozarrella','','',],
        ];
         $len =count($ingredients);
         $lenInner =count($ingredients[0]);
        for($i=0; $i<$len;$i++){
            for($j=0; $j<$lenInner;$j++){
                $ingredient = new Ingredient();
                $ingredient->name = $ingredient[$i][$j];
                $ingredient->price = $ingredient[$i][$j];
                $ingredient->btn_picture = $ingredient[$i][$j];
                $ingredient->pizza_picture = $ingredient[$i][$j];
                $ingredient->save();
            }
        }
    }
}

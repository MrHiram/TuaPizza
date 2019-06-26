<?php

use Illuminate\Database\Seeder;
use App\Ingredient;

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
            ['Chile verde','2','btn-green-peppers.png','greenPepper.png','vegetables',],
            ['Aceitunas','2','btn-olivas.png','olives.png','vegetables',],
            ['Hongos','2','btn-hongos.png','mushroom.png','vegetables',],
            ['Pepinillos','2','btn-pepinillo.png','pepinillos.png','vegetables',],
            ['Cebolla morada','2','btn-cebolla.png','cebolla.png','vegetables',],
            ['Tomate','2','btn-tomate.png','tomates.png','fruits',],
            ['Limon','2','btn-limon.png','limones.png','fruits',],
            ['Manzana','2','btn-manzanas.png','manzana.png','fruits',],
            ['Piña','2','btn-pina.png','piña.png','fruits',],
            ['Albahaca','1','btn-albahaca.png','basil.png','species',],
            ['Culantro','1','btn-culantro.png','cilantro.png','species',],
            ['Pollo','3','btn-pollo.png','chicken.png','meats',],
            ['Carne molida','3','btn-carneMolida.png','carne_molida.png','meats',],
            ['Tocineta','3','btn-bacon.png','bacon.png','meats',],
            ['Salchicha','3','btn-salchicha.png','salchicha.png','meats',],
            ['Pepperoni','3','btn-peperoni.png','peperoni.png','meats',],
            ['Cheddar','3','btn-cheddar.png','cheddar.png','cheese',],
            ['Mozarrella','3','btn-mozarrella.png','mozarrella.png','cheese',],
        ];

         $len =count($ingredients);
         $lenInner =count($ingredients[0]);

        for($i=0; $i<$len; $i++){
            $ingredient = new Ingredient();
            $ingredient->name = $ingredients[$i][0];
            $ingredient->price = $ingredients[$i][1];
            $ingredient->btn_picture = $ingredients[$i][2];
            $ingredient->pizza_picture = $ingredients[$i][3];
            $ingredient->category = $ingredients[$i][4];
            $ingredient->save();
        }
    }
}

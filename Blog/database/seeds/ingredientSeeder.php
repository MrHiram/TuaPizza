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
            ['Chile verde','2','btn-green-peppers.png','greenPepper.png','Vegetales','greenpepper','7'],
            ['Aceitunas','2','btn-olivas.png','olives.png','Vegetales','olives','15'],
            ['Hongos','2','btn-hongos.png','mushroom.png','Vegetales','mushroom','8'],
            ['Pepinillos','2','btn-pepinillo.png','pepinillos.png','Vegetales','pepinillos','4'],
            ['Cebolla morada','2','btn-cebolla.png','cebolla.png','Vegetales','cebolla','10'],
            ['Tomate','2','btn-tomate.png','tomates.png','Frutas','tomates','2'],
            ['Limon','2','btn-limon.png','limones.png','Frutas','limones','14'],
            ['Manzana','2','btn-manzanas.png','manzana.png','Frutas','manzana','12'],
            ['Piña','2','btn-pina.png','piña.png','Frutas','pina','13'],
            ['Albahaca','1','btn-albahaca.png','basil.png','Especies','basil','16'],
            ['Culantro','1','btn-culantro.png','cilantro.png','Especies','cilantro','17'],
            ['Pollo','3','btn-pollo.png','chicken.png','Carnes','chicken','11'],
            ['Carne molida','3','btn-carneMolida.png','carne_molida.png','Carnes','carnemolida','6'],
            ['Tocineta','3','btn-bacon.png','bacon.png','Carnes','bacon','9'],
            ['Salchicha','3','btn-salchicha.png','salchicha.png','Carnes','salchicha','5'],
            ['Pepperoni','3','btn-peperoni.png','peperoni.png','Carnes','peperoni','3'],
            ['Cheddar','3','btn-cheddar.png','cheddar.png','Quesos','cheddar','1'],
            ['Mozarrella','3','btn-mozarrella.png','mozarrella.png','Quesos','mozarrella','1'],
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
            $ingredient->tag_id = $ingredients[$i][5];
            $ingredient->z_index = $ingredients[$i][6];
            $ingredient->save();
        }
    }
}

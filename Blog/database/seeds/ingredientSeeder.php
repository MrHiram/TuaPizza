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
            ['Chile verde','2','btn-green-peppers.png','greenPepper.png','vegetables','greenpepper','7'],
            ['Aceitunas','2','btn-olivas.png','olives.png','vegetables','olives','15'],
            ['Hongos','2','btn-hongos.png','mushroom.png','vegetables','mushroom','8'],
            ['Pepinillos','2','btn-pepinillo.png','pepinillos.png','vegetables','pepinillos','4'],
            ['Cebolla morada','2','btn-cebolla.png','cebolla.png','vegetables','cebolla','10'],
            ['Tomate','2','btn-tomate.png','tomates.png','fruits','tomates','2'],
            ['Limon','2','btn-limon.png','limones.png','fruits','limones','14'],
            ['Manzana','2','btn-manzanas.png','manzana.png','fruits','manzana','12'],
            ['Piña','2','btn-pina.png','piña.png','fruits','pina','13'],
            ['Albahaca','1','btn-albahaca.png','basil.png','species','basil','16'],
            ['Culantro','1','btn-culantro.png','cilantro.png','species','cilantro','17'],
            ['Pollo','3','btn-pollo.png','chicken.png','meats','chicken','11'],
            ['Carne molida','3','btn-carneMolida.png','carne_molida.png','meats','carnemolida','6'],
            ['Tocineta','3','btn-bacon.png','bacon.png','meats','bacon','9'],
            ['Salchicha','3','btn-salchicha.png','salchicha.png','meats','salchicha','5'],
            ['Pepperoni','3','btn-peperoni.png','peperoni.png','meats','peperoni','3'],
            ['Cheddar','3','btn-cheddar.png','cheddar.png','cheese','cheddar','1'],
            ['Mozarrella','3','btn-mozarrella.png','mozarrella.png','cheese','mozarrella','1'],
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

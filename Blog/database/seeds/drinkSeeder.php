<?php

use Illuminate\Database\Seeder;
use App\Drink;

class drinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drinks = [
            ['Coca-Cola','2','2','2','cocacola.png',],
            ['Ginger Ale','2','2','2','gingerale.jpg',],
            ['Fanta Naranja','2','2','2','fanta.png',],
        ];

         $len =count($drinks);

        for($i=0; $i<$len; $i++){
            $drink = new Drink();
            $drink->name = $drinks[$i][0];
            $drink->price3L = $drinks[$i][1];
            $drink->price1L = $drinks[$i][2];
            $drink->price600ml = $drinks[$i][3];
            $drink->picture = $drinks[$i][4];
            $drink->save();
        }
    }
}

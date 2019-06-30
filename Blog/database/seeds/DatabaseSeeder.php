<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call(ingredientSeeder::class);
        $this->call(drinkSeeder::class);
=======
        $this->call(IngredientSeeder::class);
>>>>>>> auth3
    }
}

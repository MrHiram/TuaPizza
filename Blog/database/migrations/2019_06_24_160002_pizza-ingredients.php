<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PizzaIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('pizza_ingredients', function (Blueprint $table) {      
            $table->bigInteger('pizza_id')->unsigned();   
            $table->bigInteger('ingredient_id')->unsigned();
        });        
        Schema::table('pizza_ingredients',function (Blueprint $table) {
            $table->foreign('pizza_id')->references('id')->on('pizzas');      
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->primary(['pizza_id', 'ingredient_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizza_ingredients');
    }
}

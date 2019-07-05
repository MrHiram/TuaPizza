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
            $table->bigIncrements('id');
            $table->bigInteger('pizza_id')->unsigned();   
            $table->bigInteger('ingredient_id')->unsigned();
            $table->timestamps();
        });        
        Schema::table('pizza_ingredients',function (Blueprint $table) {
            $table->foreign('pizza_id')->references('id')->on('pizzas');      
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
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

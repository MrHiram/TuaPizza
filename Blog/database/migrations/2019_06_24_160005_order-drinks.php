<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderDrinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_drinks', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('drink_id')->unsigned();
            $table->integer('quantity');
            $table->double('total', 8, 2);
            $table->timestamps();
        });
        Schema::table('order_drinks',function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('drink_id')->references('id')->on('drinks');
            $table->primary(['order_id', 'drink_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_drinks');
    }
}

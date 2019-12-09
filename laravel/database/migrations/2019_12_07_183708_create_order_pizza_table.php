<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPizzaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pizza', function (Blueprint $table) {
            $table->bigIncrements('order_pizza_id');
            $table->biginteger('order_id')->unsigned();
            $table->foreign('order_id')->references('order_id')->on('order');
            $table->bigInteger('pizzeria_pizza_id')->unsigned();
            $table->foreign('pizzeria_pizza_id')->references('pizzeria_pizza_id')->on('pizzeria_pizza');
            $table->integer('cutting_id')->unsigned();
            $table->foreign('cutting_id')->references('cutting_id')->on('cutting');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_pizza');
    }
}

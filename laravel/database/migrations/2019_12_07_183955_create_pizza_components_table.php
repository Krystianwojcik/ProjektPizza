<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_components', function (Blueprint $table) {
            $table->biginteger('order_pizza_id')->unsigned();
            $table->foreign('order_pizza_id')->references('order_pizza_id')->on('order_pizza');
            $table->bigInteger('components_id')->unsigned();
            $table->foreign('components_id')->references('components_id')->on('components');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizza_components');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzeriaPizzaComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzeria_pizza_components', function (Blueprint $table) {
            $table->bigInteger('pizzeria_pizza_id')->unsigned();
            $table->foreign('pizzeria_pizza_id')->references('id')->on('pizzeria_pizza');
            $table->bigInteger('components_id')->unsigned();
            $table->foreign('components_id')->references('id')->on('components');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzeria_pizza_components');
    }
}

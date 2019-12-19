<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzeriaPizzaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzeria_pizza', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pizzeria_id')->unsigned();
            $table->foreign('pizzeria_id')->references('id')->on('pizzeria');
            $table->string('name');
            $table->integer('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzeria_pizza');
    }
}

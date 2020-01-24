<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->Integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('order_status');
            $table->bigInteger('pizzeria_id')->unsigned();
            $table->foreign('pizzeria_id')->references('id')->on('pizzeria');
            $table->dateTime('time');
            $table->string('name');
            $table->string('surname');
            $table->string('street');
            $table->string('numer');
            $table->string('city');
            $table->string('zipcode');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}

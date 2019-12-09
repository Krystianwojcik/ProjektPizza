<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzeriaComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzeria_components', function (Blueprint $table) {
            $table->bigInteger('pizzeria_id')->unsigned();
            $table->foreign('pizzeria_id')->references('pizzeria_id')->on('pizzeria');
            $table->bigInteger('components_id')->unsigned();
            $table->foreign('components_id')->references('components_id')->on('components');
            $table->integer('pizzeria_components_quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzeria_components');
    }
}

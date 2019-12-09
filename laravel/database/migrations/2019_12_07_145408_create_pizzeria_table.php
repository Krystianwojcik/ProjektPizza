<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzeriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzeria', function (Blueprint $table) {
            $table->bigIncrements('pizzeria_id');
            $table->string('pizzeria_name');
            $table->string('pizzeria_street');
            $table->string('pizzeria_city');
            $table->string('pizzeria_zipcode');
            $table->string('pizzeria_phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzeria');
    }
}

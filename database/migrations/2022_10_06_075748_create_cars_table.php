<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('color');
            $table->string('state_number');
            $table->string('transmission');
            $table->float('rental_price');
            $table->date('release_year');
            $table->unsignedInteger('car_model_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('car_model_id')->references('id')->on('car_models')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};

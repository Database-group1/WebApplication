<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForstackedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forstackeds', function (Blueprint $table) {
            $table->integer('prefCode')->nullable();
            $table->string('prefName')->nullable();
            $table->integer('cityCode')->nullable();
            $table->string('cityName')->nullable();
            $table->integer('oldCityCode')->nullable();
            $table->string('oldCityName')->nullable();
            $table->integer('dispType');
            $table->integer('agriculturalLandType');
            $table->integer('matter');
            $table->string('label');
            $table->integer('value_2005');
            $table->integer('value_2010');
            $table->integer('value_2015');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forstackeds');
    }
}

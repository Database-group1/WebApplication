<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForabandonmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forabandonments', function (Blueprint $table) {
            $table->integer('prefCode')->nullable();
            $table->string('prefName')->nullable();
            $table->integer('cityCode')->nullable();
            $table->string('cityName')->nullable();
            $table->integer('oldCityCode')->nullable();
            $table->string('oldCityName')->nullable();
            $table->integer('matter');
            $table->string('label');
            $table->double('value_2005', 5, 4);
            $table->double('value_2010', 5, 4);
            $table->double('value_2015', 5, 4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forabandonments');
    }
}

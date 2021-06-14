<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('VIN_Nr');
            $table->timestamps();
            $table->string('Manufacturer');
            $table->string('New_Used')->default('Used');
            $table->string('Type');
            $table->string('Model');
            $table->integer('Year');
            $table->string('Engine_Type');
            $table->integer('Power');
            $table->integer('Mileage');
            $table->float('Tax')->default(88.21);
            $table->integer('Price');
            $table->integer('Discount')->default(0);
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
}

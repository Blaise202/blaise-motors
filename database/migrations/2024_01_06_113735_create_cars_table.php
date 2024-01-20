<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_make');
            $table->string('car_model');
            $table->string('body_type');
            $table->string('transmission');
            $table->double('mileage'); // corrected typo in column name
            $table->integer('VIN');
            $table->string('status')->default('active');
            $table->double('price');
            $table->integer('number');
            $table->string('car_image');
            $table->text('description'); // changed to 'text' for longer description
            $table->timestamps();
        });
    }

    
    /**
     * Reverse the migrations.
     */
     public function down()
     {
         Schema::dropIfExists('cars');
     }
    
};
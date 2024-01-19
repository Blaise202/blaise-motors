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
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('car_id');
                $table->foreign('car_id')->references('id')->on('cars');
                $table->string('order_name');
                $table->string('orderNo');
                $table->string('payment_mode');
                $table->string('payment_status')->default('unsettled');
                $table->timestamps();
            });
        }
    
        public function down()
        {
            Schema::dropIfExists('orders');
        }
    
    

};
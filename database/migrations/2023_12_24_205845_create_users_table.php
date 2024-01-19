<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table-> string('name');
            $table->string('gender')->nullable();
            $table->string('title')->default('');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('PIN')->unique();
            $table->string('password');
            $table->string('rank')->default('7');
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
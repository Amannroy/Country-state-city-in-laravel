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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('country_name');
            $table->string('country_code'); 
            $table->timestamps();
        });
        
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('state_name');
            $table->unsignedBigInteger('country_id'); // Changed to unsignedBigInteger
            $table->string('state_code'); 
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });
        
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->unsignedBigInteger('state_id'); // Changed to unsignedBigInteger
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
        Schema::dropIfExists('states');
        Schema::dropIfExists('cities');
    }
};

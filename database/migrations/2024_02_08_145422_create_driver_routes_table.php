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
        Schema::create('driver_routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drivers_id');
            $table->unsignedBigInteger('routes_id');
            $table->time('DepartureTime')->default(null);
            $table->time('AravelTime')->default(null);
            $table->timestamps();
            $table->foreign('drivers_id')->references('id')->on('drivers');
            $table->foreign('routes_id')->references('id')->on('routes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_routes');
    }
};

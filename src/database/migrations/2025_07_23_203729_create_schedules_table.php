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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('day'); // Day 1, Day 2, dst
            $table->string('date'); // Wednesday, Thursday, dst
            $table->string('event_name');
            $table->string('time');
            $table->string('performer');
            $table->string('genre')->nullable();
            $table->string('background_color')->nullable(); // opsional styling
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};

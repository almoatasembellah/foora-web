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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('venue_name');
            $table->string('phone');
            $table->tinyInteger('number_of_players');
            $table->tinyInteger('price');
            $table->date('date');
            $table->time('time');
            $table->tinyInteger('city');
            $table->tinyInteger('area');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};

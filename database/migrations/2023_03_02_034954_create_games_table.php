<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->tinyInteger('players_number');
            $table->float('price')->default(0.00);
            $table->string('date');
            $table->string('time');
            $table->foreignId('city_id')->constrained();
            $table->foreignId('area_id')->constrained();
            $table->text('location_url');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};

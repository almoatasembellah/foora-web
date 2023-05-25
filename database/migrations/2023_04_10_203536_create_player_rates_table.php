<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('player_rates', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('pace')->default(0);
            $table->tinyInteger('shooting')->default(0);
            $table->tinyInteger('passing')->default(0);
            $table->tinyInteger('dribbling')->default(0);
            $table->tinyInteger('defending')->default(0);
            $table->tinyInteger('physical')->default(0);

            $table->foreignId('scouter_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('player_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('game_id')->constrained('games')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('player_rates');
    }
};

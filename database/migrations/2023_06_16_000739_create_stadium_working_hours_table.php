<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('stadium_working_hours', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->string('from');
            $table->string('to');
            $table->foreignId('stadium_id')->constrained('stadiums')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stadium_working_hours');
    }
};

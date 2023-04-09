<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('stadiums', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('city_id')->constrained();
            $table->foreignId('area_id')->constrained();
            $table->text('location_url');
            $table->smallInteger('space')->default(0);
            $table->string('facebook_url');
            $table->string('instagram_url');
            $table->tinyInteger('type');
            $table->tinyInteger('gross_type')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stadiums');
    }
};

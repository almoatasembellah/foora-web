<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('stadium_working_hours', function (Blueprint $table) {
            $table->string('price')->nullable()->after('to');
        });
    }

    public function down(): void
    {
        Schema::table('stadium_working_hours', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
};

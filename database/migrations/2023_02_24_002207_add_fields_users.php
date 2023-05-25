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
        Schema::table('users',function (Blueprint $table){
            $table->tinyInteger('age');
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('users',function (Blueprint $table){
           $table->dropColumn('age');
           $table->dropColumn('height');
           $table->dropColumn('weight');
           $table->dropColumn('phone');
        });
    }
};

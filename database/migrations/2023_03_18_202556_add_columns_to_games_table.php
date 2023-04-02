<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->tinyInteger('type')->default(1);
        });
    }

    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
           $table->dropColumn('type');
        });
    }
};
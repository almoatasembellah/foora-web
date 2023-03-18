<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('joined_players', function (Blueprint $table) {
            $table->dropForeignIdFor(\App\Models\Game::class , 'game_id');
            $table->foreign('game_id')->references('id')->on('games')->onDelete('CASCADE');
            $table->after('game_id' , function (Blueprint $table){
                $table->tinyInteger('status')->default(0);
            });
        });
    }

    public function down()
    {
        Schema::table('joined_players', function (Blueprint $table) {
            $table->foreignId('game_id')->constrained()->cascadeOnDelete();
            $table->dropColumn('status');
        });
    }
};

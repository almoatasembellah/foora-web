<?php

use App\Models\JoinedPlayer;

if (! function_exists('getJoinedPlayersCount')) {
    function getJoinedPlayersCount($gameId): int
    {
       return JoinedPlayer::where('game_id' , $gameId)->count();
    }
}

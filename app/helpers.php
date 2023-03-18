<?php

use App\Models\JoinedPlayer;
use Illuminate\Database\Eloquent\Collection;

if (!function_exists('getJoinedPlayersCount')) {
    function getJoinedPlayersCount($gameId): int
    {
        return JoinedPlayer::where('game_id', $gameId)->count();
    }
}

if (!function_exists('getJoinedPlayersData')) {
    function getJoinedPlayersData($gameId): Collection|array
    {
        return JoinedPlayer::with('users')->where('game_id', $gameId)->get();
    }
}

if (!function_exists('geJoinGameStatus')) {
    function geJoinGameStatus($status): string
    {
        return match ($status) {
            0 => \App\Constants\JoinStatus::PENDING_TEXT,
            1 => \App\Constants\JoinStatus::APPROVED_TEXT,
            2 => \App\Constants\JoinStatus::REJECTED_TEXT,
        };
    }
}

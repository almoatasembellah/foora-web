<?php

use App\Constants\JoinStatus;
use App\Models\JoinedPlayer;
use Illuminate\Database\Eloquent\Collection;

if (!function_exists('getJoinedPlayersCount')) {
    function getJoinedPlayersCount($gameId): int
    {
        return JoinedPlayer::where(['game_id'=> $gameId , 'status' => JoinStatus::APPROVED])->count();
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
            0 => JoinStatus::PENDING_TEXT,
            1 => JoinStatus::APPROVED_TEXT,
            2 => JoinStatus::REJECTED_TEXT,
        };
    }
}

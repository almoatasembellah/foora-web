<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JoinedPlayer extends Model
{
    protected $guarded = [];

    public function user(): HasOne
    {
        return $this->hasOne(User::class , 'id' , 'user_id');
    }
    public function game(): HasOne
    {
        return $this->hasOne(Game::class , 'id' , 'game_id');
    }
}

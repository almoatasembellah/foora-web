<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GameAttendance extends Model
{
    protected $fillable = [
        'game_id' , 'scouter_id'
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}

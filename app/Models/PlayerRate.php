<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerRate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function players()
    {
        return $this->hasMany(User::class , 'player_id' , 'id');
    }

    public function scouters()
    {
        return $this->hasMany(User::class , 'scouter_id' , 'id');
    }

    public function games()
    {
        return $this->hasMany(Game::class , 'game_id' , 'id');
    }

}

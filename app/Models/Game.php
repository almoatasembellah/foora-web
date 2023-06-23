<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function joinedPlayers()
    {
        return $this->hasMany(JoinedPlayer::class);
    }
}

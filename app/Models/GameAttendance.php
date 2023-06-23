<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameAttendance extends Model
{
    protected $fillable = [
        'game_id' , 'scouter_id'
    ];
}

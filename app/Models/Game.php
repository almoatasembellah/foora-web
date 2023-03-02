<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable =[
        'venue_name',
        'phone',
        'number_of_players',
        'price',
        'date',
        'time',
        'city',
        'area',
        'location',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StadiumWorkingHour extends Model
{
    protected $fillable = [
        'day' , 'from' , 'to' , 'stadium_id'
    ];

    public function stadium()
    {
        return $this->belongsTo(Stadium::class);
    }
}

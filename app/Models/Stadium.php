<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $table = 'stadiums';
    protected $guarded = [];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class , 'owner_id' , 'id');
    }

    public function hours()
    {
        return $this->hasMany(StadiumWorkingHour::class , 'stadium_id' , 'id');
    }
}

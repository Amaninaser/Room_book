<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'Brithday',
        'National',
        'gender',
        'city_id',
        //'user_id',
    ];
    public function city()
    {
        return $this->belongsTo(city::class, 'city_id','id');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'guest_id', 'id');
    }

}

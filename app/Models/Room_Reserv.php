<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_Reserv extends Model
{
    use HasFactory;


    protected $fillable = [
        'reservation_id',
        'room_id',
        'room_total',
        'bed_total',
        'final_total',
        'num_of_guests',
        'Is_active',
        'guest_id',
        'user_id',
    ];
    public function rooms()
    {
        return $this->hasMany(Room::class, 'room_id', 'id');
    }
    public function guests()
    {
        return $this->hasMany(Guest::class, 'guest_id', 'id');
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'guest_id', 'id');
    }



}

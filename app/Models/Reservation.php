<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Guid\Guid;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'arrival',
        'departure',
        'details',
        'Is_active',
        'guest_id',
        'user_id',
        'room_id',
        'num_of_guests',
    ];
    public function rooms()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guest_id', 'id');
    }

}

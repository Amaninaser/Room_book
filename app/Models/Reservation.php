<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Guid\Guid;

class Reservation extends Model
{
    use HasFactory;
    protected $perPage=6;

    protected $fillable = [
        'arrival',
        'name',
        'departure',
        'details',
        'Is_active',
        'user_id',
        'room_id',
        'num_of_guests',
        'final_total',
    ];
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}

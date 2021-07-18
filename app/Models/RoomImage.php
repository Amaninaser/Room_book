<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class RoomImage extends Model
{
    use HasFactory;
    protected $fillable=[
        'Room_id', 'image_path'
    ];

    public function Room()
    {
        return $this->belongsTo(Room::class,'Room_id','id');
    }

    public function getImageUrlAttribute()
    {
        return Storage::disk('uploads')->url($this->image_path);
        
    }
}

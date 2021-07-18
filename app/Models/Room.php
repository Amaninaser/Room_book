<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class Room extends Model
{
    use HasFactory;
    protected $perPage = 6;
    public $timestamps = false;

    protected $fillable = [
        'room_name',
        'room_type',
        'bedding',
        'description',
        'Is_active',
        'image',
        'max_guest',
        'children',
        'slug',
        'adults',
        'reviwes',
        'stars',
        'room_price',
        'quentity',
        'final_total',
        'Bathroom',
        'room_size',

    ];

    /**
     * Set attribute to money format
     * @param $input
     */


    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'room_id', 'id');
    }
    
    public static function validateRoles()
    {
        return [
            'room_name' => [
                'required'
            ],
            'room_type' => [
                'required',
                'in:Superior Room,Deluxe Room,Single Room,Guest House'
            ],
            'bedding' => [
                'required',
                'in:Single,Double,Triple,Quad'
            ],
            'Bathroom' => [
                'required',
                'in:Separate,Double'
            ],
            'description' => 'required',
            'room_size' => 'required',

            'image' => 'image',
            'room_price' => 'numeric|min:0',
            'max_guest' => 'numeric|min:0',
            'children' => 'numeric|min:0',
            'adults' => 'numeric|min:0',
            'stars' => 'numeric|min:0',
            'Is_active' => [
                'required',
                'in:Active,Non_Active'
            ],
        ];
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            //return asset('uploads/' . $this->image);
            return Storage::disk('uploads')->url($this->image);
        }

        return asset('images/default-image.jpg');
    }

    public function images()
    {
        return $this->hasMany(RoomImage::class, 'room_id', 'id');
    }

    // Mutators
    public function setRoomNameAttribute($value)
    {
        $this->attributes['room_name'] = Str::title($value);
    }
}

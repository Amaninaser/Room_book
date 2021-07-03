<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Room extends Model
{
    use HasFactory;   
    protected $perPage=6;
     public $timestamps = false;

    protected $fillable = [
        'room_name',
        'room_type',
        'bedding',
        'description',
        'current_price',
        'Is_active',
        'image',
        'max_guest',
        'children',
        'adults',
        'reviwes',
        'stars',
        
    ];

    /**
     * Set attribute to money format
     * @param $input
     */

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'room_id', 'id');
    }
     public  static function validateRoles()
     {
         return [
             'room_name' => [
                'required','string','max:7','min:2'
            ],
             'room_type' => [
                'required',
                'in:Superior Room,Deluxe Room,Single Room,Guest House'
            ],
            'bedding' => [
                'required',
                'in:Single,Double,Triple,Quad'
            ],
             'description' => 'required',
             'image' => 'image',
             'current_price' => 'numeric|min:0',
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
}

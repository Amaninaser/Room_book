<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_name',
        'postal_code',
        'country_id',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id','id');
    }
    public function guests()
    {
        return $this->hasMany(Guest::class, 'city_id','id');
    }
}

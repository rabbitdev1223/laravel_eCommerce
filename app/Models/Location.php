<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'city_id',
        'code',
        'location_type_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'city_id' => 'integer',
        'location_type_id' => 'integer',
    ];


    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }

    public function departments()
    {
        return $this->hasMany(\App\Models\Department::class);
    }

    public function city()
    {
        return $this->belongsTo(\App\Models\City::class);
    }

    public function locationType()
    {
        return $this->belongsTo(\App\Models\LocationType::class);
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}

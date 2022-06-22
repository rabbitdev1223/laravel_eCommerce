<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'code',
        'image_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image_id' => 'integer',
    ];


    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }

    public function images()
    {
        return $this->morphMany(\App\Models\Image::class, 'imageable');
    }

    public function image()
    {
        return $this->belongsTo(\App\Models\Image::class);
    }
}

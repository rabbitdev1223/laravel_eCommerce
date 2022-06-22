<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Phone as PhoneNumber;
 
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'start_date',
        'job_id',
        'department_id',
        'location_id',
        'email',
        'password',
        'profile_image',
        'image_id',
        'twilio_sid'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
    
    public function phones()
    {
        return $this->morphMany(PhoneNumber::class, 'phoneable');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function job()
    {
        return $this->belongsTo(\App\Models\Job::class, 'job_id');
    }

    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class);
    }

    public function location()
    {
        return $this->belongsTo(\App\Models\Location::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Product::class, 'product_user', 'user_id', 'product_id');
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function conversations()
    {
        return $this->belongsToMany(Conversation::class);
    }

    public function formattedName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    
    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'job_type_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'job_type_id' => 'integer',
    ];


    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }

    public function jobType()
    {
        return $this->belongsTo(\App\Models\JobType::class);
    }
}

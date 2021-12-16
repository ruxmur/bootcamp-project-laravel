<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'address',
        'birthday',
        'hobby'
    ];

    public function reservations()
    {
        return $this->hasMany('reservation');
    }

    public function workout_types()
    {
        return $this->belongsToMany('workout_types');
    }
}

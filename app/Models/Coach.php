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

    public function Reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function WorkoutTypes()
    {
        return $this->belongsToMany(WorkoutType::class, 'practice',  'coach_id', 'workout_type_id');
    }
}

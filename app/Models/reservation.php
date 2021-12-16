<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'client_id',
        'workout_types_id',
        'coaches_id',
        'start_time',
        'end_time'
    ];

    public function clients()
    {
        return $this->belongsToMany('client');
    }

    public function workout_types()
    {
        return $this->belongsToMany('workoutType');
    }

    public function coaches()
    {
        return $this->belongsToMany('coach');
    }
}

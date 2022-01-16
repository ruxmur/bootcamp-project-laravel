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

    public function Clients()
    {
        return $this->belongsToMany(Client::class, 'client_id');
    }

    public function WorkoutTypes()
    {
        return $this->belongsToMany(WorkoutType::class, 'workout_type_id');
    }

    public function Coaches()
    {
        return $this->belongsToMany(Coache::class, 'coach_id');
    }
}

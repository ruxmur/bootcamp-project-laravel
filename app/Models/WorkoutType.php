<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutType extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    public function Reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

    public function Coaches()
    {
        return $this->belongsToMany(Coache::class, 'practice',  'coach_id', 'workout_type_id');
    }

    public function Clients()
    {
        return $this->belongsToMany(Client::class);
    }
}

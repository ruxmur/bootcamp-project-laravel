<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'membership_id',
        'start_time',
        'end_time'
    ];

    public function Memberships()
    {
        return $this->belongsToMany(Membership::class, 'membership_id');
    }

    public function AboutClient()
    {
        return $this->hasOne(AboutClient::class);
    }

    public function Reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function WorkoutType()
    {
        return $this->belongsToMany(WorkoutType::class, 'training', 'client_id', 'workout_type_id');
    }
}

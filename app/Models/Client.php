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
        return $this->belongsToMany(Membership::class, 'client_membership');
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
        return $this->belongsToMany(WorkoutType::class, 'client_workoutType', 'client_id', 'workoutType_id');
    }
}

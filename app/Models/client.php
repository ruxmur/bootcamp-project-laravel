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

    public function memberships()
    {
        return $this->belongsToMany('membership');
    }

    public function aboutClient()
    {
        return $this->hasOne('aboutClient');
    }

    public function reservations()
    {
        return $this->hasMany('reservation');
    }

    public function workout_type()
    {
        return $this->belongsToMany('workout_type');
    }
}

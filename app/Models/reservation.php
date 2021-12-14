<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
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

    public function client()
    {
        return $this->belongsTo('client');
    }

    public function workout_type()
    {
        return $this->hasMany('workoutType');
    }

    public function coach()
    {
        return $this->belongsTo('coach');
    }
}

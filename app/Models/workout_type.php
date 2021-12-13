<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workout_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    public function reservation()
    {
        return $this->belongsTo('reservation');
    }

    public function training()
    {
        return $this->hasMany('training');
    }

    public function practice()
    {
        return $this->hasMany('practice');
    }
}

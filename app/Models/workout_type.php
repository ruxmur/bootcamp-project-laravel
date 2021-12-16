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

    public function reservation()
    {
        return $this->belongsTo('reservation');
    }

    public function coachs()
    {
        return $this->belongsToMany('coach');
    }

    public function clients()
    {
        return $this->belongsToMany('client');
    }
}

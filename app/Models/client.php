<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
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

    public function membership()
    {
        return $this->hasMany('membership');
    }

    public function about_client()
    {
        return $this->hasOne('about_client');
    }

    public function reservation()
    {
        return $this->hasMany('reservation');
    }

    public function training()
    {
        return $this->hasMany('training');
    }
}

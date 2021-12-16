<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'types',
        'duration',
        'price',
        'price_lei'
    ];

    public function clients()
    {
        return $this->hasMany('client');
    }

}

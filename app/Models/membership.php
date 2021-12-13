<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membership extends Model
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

    public function client()
    {
        return $this->belongsTo('client');
    }

}

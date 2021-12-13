<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about_client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'email',
        'phone_number',
        'sex',
        'hight',
        'weight',
        'age'
    ];

    public function client()
    {
        return $this->belongsTo('client');
    }

}

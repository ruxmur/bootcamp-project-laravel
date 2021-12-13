<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coach extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'address',
        'birthday',
        'hobby'
    ];

    public function reservation()
    {
        return $this->hasMany('reservation');
    }

    public function practice()
    {
        return $this->hasMany('practice');
    }
}

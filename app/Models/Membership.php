<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model implements LoggableInterface 
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'type',
        'duration',
        'price',
        'price_lei'
    ];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function convertToLoggableString(): string
    {
       return "Membership with id {$this->id}";
    }

    public function getData(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'price' => $this->price,
        ];
    }
}

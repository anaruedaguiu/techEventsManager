<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainRoute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'userName',
        'origin',
        'destination',
        'datetime',
        'departureTime',
        'arrivalTime',
        'routeLenght',
        'availableSeats',
        'features',
        'img',
    ];
}

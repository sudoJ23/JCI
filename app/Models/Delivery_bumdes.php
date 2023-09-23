<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_bumdes extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_name',
        'phone_number',
        'car_type',
        'charge',
        'transaction_id',
    ];

    protected $table = 'delivery_bumdes';
}

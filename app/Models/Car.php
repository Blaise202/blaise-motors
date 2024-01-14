<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_make',
        'car_model',
        'body_type',
        'transmission',
        'mileage',
        'VIN',
        'price',
        'overall_description',
        'status', // Add 'status' to the fillable array
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['car_id', 'order_name', 'orderNo', 'payment_mode'];	
    public function car()
    {
        return $this->belongsTo(cars::class);
    }
}
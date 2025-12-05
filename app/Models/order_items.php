<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    use HasFactory;

    protected $fillable = [

        'order_id',
        'car_id',
        'price',
        'color',
        'year',
    ];

    public function order()
    {
        return $this->belongsTo(customer_order::class, 'order_id');
    }

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}

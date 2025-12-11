<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_orders extends Model
{
    use HasFactory;

    protected $table = 'customer_orders';
    protected $fillable = [
        'fullname',
        'email',
        'contact',
        'cnic',
        'address',
        'city',
        'days',
        'payment_method',
        'order_data',
        'order_status'
    ];
}

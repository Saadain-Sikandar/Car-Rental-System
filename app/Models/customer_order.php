<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_order extends Model
{
    use HasFactory;    

    protected $fillable = [
        'fullname',
        'email',
        'contact',
        'cnic',
        'address',
        'city',
        'days',
        'payment_method'

    ];

    public function items()
    {
        return $this->hasMany(order_items::class,'order_id');
    }
}

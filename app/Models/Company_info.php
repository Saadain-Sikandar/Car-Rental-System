<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_info extends Model
{
    use HasFactory;

    protected $table = 'company_info';

    protected $fillable = [

        'city',
        'address',
        'email',
        'contact',

    ];
}

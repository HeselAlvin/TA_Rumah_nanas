<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'customer_name',
        'customer_phone',
        'total_price',
        'Struk',
        'Status'
    ];
    
}

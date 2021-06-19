<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email', 
        'street_address', 
        'city', 
        'state', 
        'postcode',
        'phone'
    ];
}

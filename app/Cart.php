<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id',
        'product_price',
        'product_quantity'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}

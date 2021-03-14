<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table='products';

    protected $fillable = [
        'id',
        'name', 
        'product_code', 
        'buying_price',
        'selling_price',
    ];

    public function stock_profile(){
       return $this->hasOne('App\Stock');
    }
}

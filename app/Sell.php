<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    //
    protected $table='sells';
    protected $fillable = [
        'product_id	', 
        'customer_id', 
        'quantity',
    ];


    public function productProfile(){
        return $this->hasOne('App\Product', 'id', 'product_id');
      }
    public function customerProfile(){
        return $this->hasOne('App\Customer', 'id', 'customer_id');
      }
      
}

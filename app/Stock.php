<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
    protected $table='stocks';
    protected $fillable = [
        'product_id', 
        'quantity',
    ];

    public function productProfile(){
        return $this->hasOne('App\Product', 'id', 'product_id');
      }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    protected $table='purchases';
    protected $fillable = [
        'product_id', 
        'supplier_id',         
        'quantity',
        'status',
    ];

    // Hasone join

    public function productProfile(){
        return $this->hasOne('App\Product', 'id', 'product_id');
      }
    public function suplierProfile(){
        return $this->hasOne('App\Supplier', 'id', 'supplier_id');
      }
}

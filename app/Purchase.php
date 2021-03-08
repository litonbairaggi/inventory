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
        'category',
        'quantity',
    ];
}

<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([

            'name'            => $row['name'],
            'product_code'    => $row['product_code'], 
            'buying_price'    => $row['buying_price'], 
            'selling_price'   =>$row['selling_price'],        
        ]);
    }
}

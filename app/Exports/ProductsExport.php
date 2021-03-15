<?php

namespace App\Exports;

use App\Product;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::select('name', 'product_code', 'buying_price', 'selling_price')->get();
    }

    public function headings(): array
    {
        return [        
            'name',
            'product_code',
            'buying_price',
            'selling_price',
        ];
    }
}

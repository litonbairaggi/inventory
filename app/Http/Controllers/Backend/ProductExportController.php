<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Exports\ProductsExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ProductExportController extends Controller
{
    public function export() 
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
}

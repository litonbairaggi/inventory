<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ProductImportController extends Controller
{
    public function create(){
        return view('backend.product_import.create');
    }
    

    public function importProduct(Request $request){

        Excel::import(new ProductsImport, request()->file('file'));
        
        return redirect('/backend/product/list');
    }
}

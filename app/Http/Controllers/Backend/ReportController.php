<?php

namespace App\Http\Controllers\Backend;

use App\Stock;
use App\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    //

    public function  purchaseInvoice($id){

        $purchaseReport =Purchase::findOrFail($id);
        return view('backend.reports.purchase-invoice', compact('purchaseReport'));
    }


    public function  stockReport(){

        $stocks =Stock::get();
        return view('backend.reports.stock', compact('stocks'));
    }
}

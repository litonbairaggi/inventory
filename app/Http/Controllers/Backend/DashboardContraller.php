<?php

namespace App\Http\Controllers\Backend;

use App\Sell;
use App\Stock;
use App\Purchase;
use App\Dashboard;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DashboardContraller extends Controller
{ 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $todayPurchases=Purchase::whereDate('created_at', Carbon::today())->get();
        $todaySells=Sell::whereDate('created_at', Carbon::today())->get();

        return view('backend.dashboard.list',compact('todayPurchases','todaySells',));
    }
    
}

<?php

namespace App\Http\Controllers\Backend;

use App\Sell;
use App\Stock;
use App\Product;
use App\Customer;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=Product::all();
        $customers=Customer::all();
        return view('backend.sell.create', compact('products', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $sellObj= new Sell;

        $sellObj->product_id=$request->product_id;
        $sellObj->customer_id=$request->customer_id;
        $sellObj->quantity=$request->quantity;
        $sellObj->description=$request->description;
        $sellObj->save();

        $stockprofi = $sellObj->productProfile->stock_profile;

        $stockprofi->quantity = $stockprofi->quantity - $request->quantity;
        $stockprofi->save();

        Session::flash('message','Successfully Sell');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {

        if(!empty($request->from_date) && !empty($request->to_date)) {
            $sells=Sell::
            whereBetween('created_at', [$request->from_date." 00:00:00", $request->to_date." 23:59:59"])->get();
        }else {
            $sells=Sell::all();
        }
      
        return view('backend.sell.list', compact('sells'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

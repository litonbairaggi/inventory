<?php

namespace App\Http\Controllers\Backend;

use Session;
use App\Stock;
use App\Product;
use App\Purchase;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
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
        $suppliers=Supplier::all();
        $products=Product::all();

        return view('backend.purchase.create', compact('suppliers','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request->all();

        $puchaseObj= new Purchase;
        
        $puchaseObj->product_id=$request->product_id;
        $puchaseObj->supplier_id=$request->suplier_id;
        $puchaseObj->quantity=$request->quantity;
        $puchaseObj->save();

        // add proudct to stock                                                   
        $stockProfile=Stock::where('product_id',$request->product_id)->first();
        if(empty($stockProfile)){

            $stockObj=new Stock;
            $stockObj->product_id=$request->product_id;
            $stockObj->quantity=$request->quantity;
            $stockObj->save();
        } else {
            $stockProfile->quantity=$stockProfile->quantity+$request->quantity;
            $stockProfile->save();
        }
        Session::flash('message','Successfully Purchase');
        return redirect()->back();



        // DB::beginTransaction();

        // try {
         


        //     DB::commit();
        //     // all good
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     // something went wrong
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editpurchases=Purchase::findOrFail($id);
        $editproducts=Product::all();
        $editsuppliers=Supplier::all();

        return view('backend.purchase.edit', compact('editpurchases', 'editproducts', 'editsuppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return $request;
        $purchaseProfile=Purchase::findOrFail($request->purchase_id);
        $purchaseProfile->product_id=$request->product_id;
        $purchaseProfile->supplier_id=$request->suplier_id;
        $purchaseProfile->quantity=$request->quantity;
        $purchaseProfile->save();

        $productQuantity=DB::table('purchases')->where('product_id',$request->product_id)->sum('quantity');
        
        $stockProfile=Stock::where('product_id',$request->product_id)->first();
        $stockProfile->quantity=$productQuantity;
        $stockProfile->save();
        Session::flash('message','Successfully Update');
        return redirect()->back();

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

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
         $purchases=Purchase::all();
        return view('backend.purchase.list', compact('purchases'));
    }

}

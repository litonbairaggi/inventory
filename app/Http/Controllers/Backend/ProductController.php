<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Purchase;
use Session;

class ProductController extends Controller
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
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        //return $request; 
        $productobj=new Product;

        $productobj->name=$request->name;
        $productobj->product_code=$request->product_code;
        $productobj->buying_price=$request->buying_price;
        $productobj->selling_price=$request->selling_price;
        $productobj->save();
        Session::flash('message','Successfully Create');
        return redirect()->back();
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
        $products=Product::all();
        return view('backend.product.list', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editproducts =Product::findOrFail($id);
        return view('backend.product.edit', compact('editproducts'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewProduct($id)
    {
        $product =Product::findOrFail($id);
        return view('backend.product.view', compact('product'));

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
        $productProfile=Product::findOrFail($id);
        $productProfile->name=$request->name;
        $productProfile->product_code=$request->product_code;
        $productProfile->buying_price=$request->buying_price;
        $productProfile->selling_price=$request->selling_price;
        $productProfile->save();
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
        $productProfiles =Product::findOrFail($id);
        $productProfiles->delete();
        return redirect()->back();
    }
}

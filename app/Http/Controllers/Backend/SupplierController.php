<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Supplier;
use Session;

class SupplierController extends Controller
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
        return view('backend.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplierobj=new Supplier;
        $supplierobj->name=$request->name;
        $supplierobj->email=$request->email;
        $supplierobj->phone=$request->phone;
        $supplierobj->address=$request->address;
        $supplierobj->save();
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
        $suppliers=Supplier::all();
        return view('backend.supplier.list',compact('suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editsuppliers=Supplier::findOrFail($id);
        return view('backend.supplier.edit', compact('editsuppliers'));
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
        $supplierProfile=Supplier::findOrFail($id);
        $supplierProfile->name=$request->name;
        $supplierProfile->email=$request->email;
        $supplierProfile->phone=$request->phone;
        $supplierProfile->address=$request->address;
        $supplierProfile->save();
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
        $supplierProfiles=Supplier::findOrFail($id);
        $supplierProfiles->delete();
        return redurect()->back();
    }
}

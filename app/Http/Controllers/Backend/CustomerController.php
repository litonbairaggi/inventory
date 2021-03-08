<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use Session;

class CustomerController extends Controller
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
        return view('backend.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customerobj=new Customer;

        $customerobj->name=$request->name;
        $customerobj->email=$request->email;
        $customerobj->phone=$request->phone;
        $customerobj->address=$request->address;
        $customerobj->save();
        Session::flash('message','Successfully create');
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
        $customers=Customer::all();
        return view('backend.customer.list', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editCustomers=Customer::findOrFail($id);
        return view('backend.customer.edit', compact('editCustomers'));
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
        $customerProfiles=Customer::findOrFail($id);
        $customerProfiles->name=$request->name;
        $customerProfiles->email=$request->email;
        $customerProfiles->phone=$request->phone;
        $customerProfiles->address=$request->address;
        $customerProfiles->save();
        Session::flash('message','Successfully update');
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
        $customerProfile=Customer::findOrFail($id);
        $customerProfile->delete();
        return redirect()->back();
    }
}

@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Product list
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product Name</th>
                                                <th>Supplier Name</th>
                                                <th>Unit Price</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>ID</th>
                                                <th>Product Name</th>
                                                <th>Supplier Name</th>
                                                <th>Unit Price</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @if(!empty($purchases))
                                           @foreach($purchases as $purchase)
                                        <tr>
                                            <td>{{$purchase->id}}</td>

                                            <td><a href="{{URL::to('/backend/product/view',$purchase->productProfile->id)}}">{{$purchase->productProfile->name}}</a</td>
                                            <td>{{$purchase->suplierProfile->name}}</td>
                                            <td>{{$purchase->productProfile->buying_price}}</td>
                                            <td>{{$purchase->quantity}}</td>
                                            <td>{{$purchase->quantity*$purchase->productProfile->buying_price}}</td>
                                            <td>{{$purchase->status}}</td>
                                            <td>
                                                <a href="{{URL::to('/backend/purchase/invoice',$purchase->id)}}" class="btn btn-primary">Report</a>
                                                <a href="{{URL::to('/backend/purchase/edit',$purchase->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{URL::to('/backend/purchase/destroy',$purchase->id)}}"  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                            </td>
                                            </tr>
                                            @endforeach
                                        @else
                                          <tr>Add not found</tr>    
                                        @endif    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
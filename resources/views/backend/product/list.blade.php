@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Product list
                            </div>
                            <div class="card-body">
                            <a class="btn btn-primary" href="{{URL::to('backend/product_import/create')}}">Import</a>
                            <a class="btn btn-primary" href="{{URL::to('export')}}">Export</a>
                            
                                <div class="table-responsive">

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product Name</th>
                                                <th>Product Code</th>
                                                <th>Buying price</th>
                                                <th>Selling price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>ID</th>
                                                <th>Product Name</th>
                                                <th>Product Code</th>
                                                <th>Buying price</th>
                                                <th>Selling price</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @if(!empty($products))
                                           @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>

                                            <td>{{$product->name}}</td>
                                            <td>{{$product->product_code}}</td>
                                            <td>{{$product->buying_price}}</td>
                                            <td>{{$product->selling_price}}</td>
                                            <td>
                                                <a href="{{URL::to('/backend/product/edit',$product->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{URL::to('/backend/product/destroy',$product->id)}}"  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
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
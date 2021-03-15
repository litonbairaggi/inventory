@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Sell Create
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/sell/store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    <label for="quantity">Product:</label>
                                    <select name="product_id" id="product_id" class="form-control">
                                           <option value="">Select Product</option>
                                        @foreach($products as $product)
                                           <option value="{{$product->id}}">{{$product->name}}</option>
                                        @endforeach   
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="customer_id">Customer:</label>
                                    <select name="customer_id" id="customer_id" class="form-control">
                                           <option value="">Select Customer</option>
                                        @foreach($customers as $customer)
                                           <option value="{{$customer->id}}">{{$customer->name}}</option>
                                        @endforeach   
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="quantity">Product Quantity:</label>
                                    <input type="number" class="form-control" placeholder="Product quantity" name="quantity" id="quantity">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description:</label><br>
                                    <textarea rows="4" cols="50" class="form-control" name="description" id="description" placeholder="Description text hare..."></textarea>
                                </div> 

                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <select name="status" id="status" class="form-control">
                                           <option value="paid">paid</option>
                                           <option value="unpaid">unpaid</option> 
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection

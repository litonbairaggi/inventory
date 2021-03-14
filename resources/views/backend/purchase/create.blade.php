@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Purchase Create
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/purchase/store')}}" method="post" enctype="multipart/form-data">
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
                                    <label for="suplier_id">Suplier:</label>
                                    <select name="suplier_id" id="suplier_id" class="form-control">
                                           <option value="">Select Suplier</option>
                                        @foreach($suppliers as $supplier)
                                           <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                        @endforeach   
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="quantity">Product Quantity:</label>
                                    <input type="number" class="form-control" placeholder="Product quantity" name="quantity" id="quantity">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection

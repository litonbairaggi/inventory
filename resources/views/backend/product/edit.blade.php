@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Product Update
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/product/update',$editproducts->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Product Name:</label>
                                    <input type="text" class="form-control" placeholder="Product name" name="name" value="{{$editproducts->name}}" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="product_code">Product Code:</label>
                                    <input type="text" class="form-control" placeholder="Product code" name="product_code" value="{{$editproducts->product_code}}" id="product_code">
                                </div>

                                <div class="form-group">
                                    <label for="buying_price">Buying Price:</label>
                                    <input type="text" class="form-control" placeholder="Buying price" name="buying_price" value="{{$editproducts->buying_price}}" id="buying_price">
                                </div>

                                <div class="form-group">
                                    <label for="selling_price">Selling Price:</label>
                                    <input type="text" class="form-control" placeholder="Selling price" name="selling_price" value="{{$editproducts->selling_price}}" id="selling_price">
                                </div>
                                                             
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection

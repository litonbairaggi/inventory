@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Product Create
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/product/store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Product Name:</label>
                                    <input type="text" class="form-control" placeholder="Product name" name="name" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="product_code">Product Code:</label>
                                    <input type="text" class="form-control" placeholder="Product code" name="product_code" id="product_code">
                                </div>

                                <div class="form-group">
                                    <label for="buying_price">Buying price:</label>
                                    <input type="text" class="form-control" placeholder="Buying price" name="buying_price" id="buying_price">
                                </div>

                                <div class="form-group">
                                    <label for="selling_price">Selling price:</label>
                                    <input type="text" class="form-control" placeholder="Selling price" name="selling_price" id="selling_price">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection

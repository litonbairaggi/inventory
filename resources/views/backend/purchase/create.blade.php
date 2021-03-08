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
                                    <label for="product_id">Product ID:</label>
                                    <input type="number" class="form-control" placeholder="Product id" name="product_id" id="product_id">
                                </div>

                                <div class="form-group">
                                    <label for="supplier_id">Supplier ID:</label>
                                    <input type="number" class="form-control" placeholder="Supplier id" name="supplier_id" id="supplier_id">
                                </div>

                                <div class="form-group">
                                    <label for="quantity">Category:</label>
                                    <select name="category" id="category" class="form-control">
                                        @foreach($editproducts as editproduct)
                                           <option value="{{$editproduct->id}}">{{$editproduct->name}}</option>
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

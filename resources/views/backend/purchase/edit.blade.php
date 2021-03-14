@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Purchase Update
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/purchase/update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="purchase_id" value="{{$editpurchases->id}}">
                            <div class="form-group">
                                    <label for="quantity">Product:</label>
                                    <select name="product_id" id="product_id" class="form-control">
                                           <option value="{{$editpurchases->product_id}}">{{$editpurchases->productProfile->name}}</option>
                                        @foreach($editproducts as $editproduct)
                                           <option value="{{$editproduct->id}}">{{$editproduct->name}}</option>
                                        @endforeach   
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="suplier_id">Suplier:</label>
                                    <select name="suplier_id" id="suplier_id" class="form-control">
                                           <option value="{{$editpurchases->supplier_id}}">{{$editpurchases->suplierProfile->name}}</option>
                                        @foreach($editsuppliers as $editsupplier)
                                           <option value="{{$editsupplier->id}}">{{$editsupplier->name}}</option>
                                        @endforeach   
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="quantity">Product Quantity:</label>
                                    <input type="number" value="{{$editpurchases->quantity}}" class="form-control" placeholder="Product quantity" name="quantity" id="quantity">
                                </div>

                                 <!-- TODO -->
                                   
                                <div class="form-group">   
                                    <label for="status">Status:</label>
                                    <select name="status" id="status" class="form-control">
                                           <option value="{{$editpurchases->id}}">{{$editpurchases->status}}</option>
                                           
                                           @foreach($editpurchases as $editpurchase)
                                           <option value="{{$editpurchase->id}}">{{$editpurchase->status}}</option>
                                        @endforeach 

                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection

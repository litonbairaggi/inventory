@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Customer Update
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/customer/update', $editCustomers->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Customer Name:</label>
                                    <input type="text" class="form-control" placeholder="Product name" value="{{$editCustomers->name}}" name="name" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="email">Customer Email:</label>
                                    <input type="email" class="form-control" placeholder="Customer email" value="{{$editCustomers->email}}" name="email" id="email">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Customer Phone:</label>
                                    <input type="tel" class="form-control" placeholder="Customer phone" value="{{$editCustomers->phone}}" name="phone" id="phone">
                                </div>

                                <div class="form-group">
                                    <label for="address">Customer Address:</label>
                                    <input type="text" class="form-control" placeholder="Customer address" value="{{$editCustomers->address}}" name="address" id="address">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection

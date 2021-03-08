@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Supplier Update
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/supplier/update', $editsuppliers->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Supplier Name:</label>
                                    <input type="text" class="form-control" placeholder="Product name" value="{{$editsuppliers->name}}" name="name" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="email">Supplier Email:</label>
                                    <input type="email" class="form-control" placeholder="Customer email" value="{{$editsuppliers->email}}" name="email" id="email">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Supplier Phone:</label>
                                    <input type="tel" class="form-control" placeholder="Customer phone" value="{{$editsuppliers->phone}}" name="phone" id="phone">
                                </div>

                                <div class="form-group">
                                    <label for="address">Supplier Address:</label>
                                    <input type="text" class="form-control" placeholder="Customer address" value="{{$editsuppliers->address}}" name="address" id="address">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection

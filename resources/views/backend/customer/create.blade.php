@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Customer Create
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/customer/store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Customer Name:</label>
                                    <input type="text" class="form-control" placeholder="Product name" name="name" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="email">Customer Email:</label>
                                    <input type="email" class="form-control" placeholder="Customer email" name="email" id="email">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Customer Phone:</label>
                                    <input type="tel" class="form-control" placeholder="Customer phone" name="phone" id="phone">
                                </div>

                                <div class="form-group">
                                    <label for="address">Customer Address:</label>
                                    <input type="text" class="form-control" placeholder="Customer address" name="address" id="address">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection

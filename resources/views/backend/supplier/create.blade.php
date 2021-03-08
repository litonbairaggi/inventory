@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Supplier Create
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/supplier/store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Supplier Name:</label>
                                    <input type="text" class="form-control" placeholder="Product name" name="name" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="email">Supplier Email:</label>
                                    <input type="email" class="form-control" placeholder="Supplier email" name="email" id="email">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Supplier Phone:</label>
                                    <input type="tel" class="form-control" placeholder="Supplier phone" name="phone" id="phone">
                                </div>

                                <div class="form-group">
                                    <label for="address">Supplier Address:</label>
                                    <input type="text" class="form-control" placeholder="Supplier address" name="address" id="address">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection

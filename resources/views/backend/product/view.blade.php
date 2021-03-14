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


                            <table class="table table-bordered" style="width:50%">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <td>{{$product->name}}</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <th>Product Buying Price</th>
                                    <td>Doe</td>
                                </tr>
                                <tr>
                                <th>Product Sellling Price</th>
                                    <td>Doe</td>
                                </tr>
                                </tbody>
                            </table>

                            </div>
                        </div>
                    </div>
@endsection

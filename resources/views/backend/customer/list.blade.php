
@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Customer list
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Customer Name</th>
                                                <th>Customer email</th>
                                                <th>Customer phone</th>
                                                <th>Customer Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Customer Name</th>
                                                <th>Customer email</th>
                                                <th>Customer phone</th>
                                                <th>Customer Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @if(!empty($customers))
                                           @foreach($customers as $customer)
                                        <tr>
                                            <td>{{$customer->id}}</td>

                                            <td>{{$customer->name}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>{{$customer->phone}}</td>
                                            <td>{{$customer->address}}</td>
                                            <td>
                                                <a href="{{URL::to('/backend/customer/edit',$customer->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{URL::to('/backend/customer/destroy',$customer->id)}}"  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                            </td>
                                            </tr>
                                            @endforeach
                                        @else
                                          <tr>Add not found</tr>    
                                        @endif    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
































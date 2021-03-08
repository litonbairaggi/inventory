
@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Supplier list
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Supplier Name</th>
                                                <th>Supplier email</th>
                                                <th>Supplier phone</th>
                                                <th>Supplier Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Supplier Name</th>
                                                <th>Supplier email</th>
                                                <th>Supplier phone</th>
                                                <th>Supplier Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @if(!empty($suppliers))
                                           @foreach($suppliers as $supplier)
                                        <tr>
                                            <td>{{$supplier->id}}</td>

                                            <td>{{$supplier->name}}</td>
                                            <td>{{$supplier->email}}</td>
                                            <td>{{$supplier->phone}}</td>
                                            <td>{{$supplier->address}}</td>
                                            <td>
                                                <a href="{{URL::to('/backend/supplier/edit',$supplier->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{URL::to('/backend/supplier/destroy',$supplier->id)}}"  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
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

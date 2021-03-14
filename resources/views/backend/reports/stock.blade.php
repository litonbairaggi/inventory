@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Stock Live
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @if(!empty($stocks))
                                           @foreach($stocks as $stock)
                                        <tr>
                                            <td>{{$stock->id}}</td>                                          
                                            <td>{{$stock->productProfile->name}}</td>
                                            <td>{{$stock->quantity}}</td>
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
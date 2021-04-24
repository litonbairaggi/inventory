@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Sell list
                            </div>
                            <div class="card-body">

                            <form action="{{URL::to('/backend/sell/list')}}" method="post" >
                                @csrf
                                <label for="fromtDate">From date:</label>
                                <input type="date" id="from_date" name="from_date">
                             

                                <label for="toDate">To date:</label>
                                <input type="date" id="to_date" name="to_date">

                                <button type="submit" class="btn btn-primary">Search</button>
                                </form>

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product Name</th>
                                                <th>Customer Name</th>
                                                <th>Unit Price</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Created_at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>ID</th>
                                                <th>Product Name</th>
                                                <th>Customer Name</th>
                                                <th>Unit Price</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Created_at</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @if(!empty($sells))
                                           @foreach($sells as $sell)
                                        <tr>
                                            <td>{{$sell->id}}</td>

                                            <td><a href="{{URL::to('/backend/sell/view',$sell->productProfile->id)}}">{{$sell->productProfile->name}}</a</td>
                                            <td>{{$sell->customerProfile->name}}</td>
                                            <td>{{$sell->productProfile->buying_price}}</td>
                                            <td>{{$sell->quantity}}</td>
                                            <td>{{$sell->quantity*$sell->productProfile->buying_price}}</td>
                                            <td>{{$sell->description}}</td>
                                            <td>{{$sell->status}}</td>
                                            <td>{{$sell->created_at}}</td>
                                            <td>
                                                <a href="{{URL::to('/backend/sell/invoice',$sell->id)}}" class="btn btn-primary">Report</a>                                                
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
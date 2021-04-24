@extends('backend.master')
@section('content')
<div class="container-fluid">
   <h5 class="mt-4">Dashboard</h5>
   <!-- <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
      </ol> -->
   <div class="row">
      <div class="col-xl-3 col-md-6">
         <div class="card bg-primary text-white mb-4">
            <div class="card-body">Total Product</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
               <a class="small text-white stretched-link" href="#">5k</a>
               <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-md-6">
         <div class="card bg-warning text-white mb-4">
            <div class="card-body"><h3>{($allStocks)}</h3></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
               <a class="small text-white stretched-link" href="#">Stock</a>
               <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-md-6">
         <div class="card bg-success text-white mb-4">
            <div class="card-body">Total Purchase</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
               <a class="small text-white stretched-link" href="#">21360</a>
               <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-md-6">
         <div class="card bg-danger text-white mb-4">
            <div class="card-body">Total Sell</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
               <a class="small text-white stretched-link" href="#">1623</a>
               <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-xl-6">
         <div class="container-fluid">
            <div class="card mb-4">
               <div class="card-header">
                  <i class="fas fa-table mr-1"></i>
                  Today Purchase
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Product Name</th>
                              <th>Supplier Name</th>
                              <th>Unit Price</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if(!empty($todayPurchases))
                           @foreach($todayPurchases as $todayPurchase)
                           <tr>
                              <td>{{$todayPurchase->id}}</td>
                              <td>{{$todayPurchase->productProfile->name}}</td>
                              <td>{{$todayPurchase->suplierProfile->name}}</td>
                              <td>{{$todayPurchase->productProfile->buying_price}}</td>
                              <td>{{$todayPurchase->quantity}}</td>
                              <td>{{$todayPurchase->quantity*$todayPurchase->productProfile->buying_price}}</td>
                              <td>{{$todayPurchase->status}}</td>
                           </tr>
                           @endforeach
                           @else
                           <tr>Purchase not found</tr>
                           @endif    
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-6">
         <div class="container-fluid">
            <div class="card mb-12">
               <div class="card-header">
                  <i class="fas fa-table mr-1"></i>
                  Today Sell
               </div>
               <div class="card-body">
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
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if(!empty($todaySells))
                           @foreach($todaySells as $todaySell)
                           <tr>
                              <td>{{$todaySell->id}}</td>
                              <td>{{$todaySell->productProfile->name}}</td>
                              <td>{{$todaySell->customerProfile->name}}</td>
                              <td>{{$todaySell->productProfile->buying_price}}</td>
                              <td>{{$todaySell->quantity}}</td>
                              <td>{{$todaySell->quantity*$todaySell->productProfile->buying_price}}</td>
                              <td>{{$todaySell->status}}</td>
                           </tr>
                           @endforeach
                           @else
                           <tr>Sell not found</tr>
                           @endif    
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
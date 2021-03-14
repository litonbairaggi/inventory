<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <div class="card">
            <div class="card-header">
               Invoice
               <strong>{{$purchaseReport->created_at}}</strong> 
               <span class="float-right"> <strong>Status:</strong> Pending</span>
            </div>
            <div class="card-body">
               <div class="row mb-4">
                  <div class="col-sm-6">
                     <h6 class="mb-3">From:</h6>
                     <div>
                        <strong>{{$purchaseReport->suplierProfile->name}}</strong>
                     </div>
                     <div>{{$purchaseReport->suplierProfile->address}}</div>
                     <div>Email: {{$purchaseReport->suplierProfile->email}}</div>
                     <div>Phone: {{$purchaseReport->suplierProfile->Phone}}</div>
                  </div>
                  <div class="col-sm-6">
                     <h6 class="mb-3">To:</h6>
                     <div>
                        <strong>Circle Pie</strong>
                     </div>
                     <div>Badda, Dhaka</div>
                     <div>Email: liton@gmail.com</div>
                     <div>Phone: +089736442</div>
                  </div>
               </div>
               <div class="table-responsive-sm">
                  <table class="table table-striped">
                     <thead>
                        <tr>
                           <th class="center">#</th>
                           <th>Item</th>
                           <th>Descriptions</th>
                           <th class="right">Unit Cost</th>
                           <th class="center">Qty</th>
                           <th class="right">Total</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="center">1</td>
                           <td class="left strong">{{$purchaseReport->productProfile->name}}</td>
                           <td class="left strong"> Demo descripton</td>
                           <td class="right">{{$purchaseReport->productProfile->buying_price}}</td>
                           <td class="center">{{$purchaseReport->quantity}}</td>
                           <td class="right">{{$purchaseReport->quantity*$purchaseReport->productProfile->buying_price}}</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-sm-5">
                  </div>
                  <div class="col-lg-4 col-sm-5 ml-auto">
                     <table class="table table-clear">
                        <tbody>
                           <tr>
                              <td class="left">
                                 <strong>Subtotal</strong>
                              </td>
                              <td class="right">{{$purchaseReport->quantity*$purchaseReport->productProfile->buying_price}}</td>
                           </tr>
                           <tr>
                              <td class="left">
                                 <strong>Discount (0%)</strong>
                              </td>
                              <td class="right">0</td>
                           </tr>
                           <tr>
                              <td class="left">
                                 <strong>VAT (0%)</strong>
                              </td>
                              <td class="right">0</td>
                           </tr>
                           <tr>
                              <td class="left">
                                 <strong>Total</strong>
                              </td>
                              <td class="right">
                                 <strong>{{$purchaseReport->quantity*$purchaseReport->productProfile->buying_price}}</strong>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Dashboard - SB Admin</title>
      <link href="{{ asset('assets/backend/css/styles.css')}}" rel="stylesheet" />
      <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
   </head>
   <body class="sb-nav-fixed">
      <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
         <a class="navbar-brand" href="index.html">Product Managment</a>
         <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
         <!-- Navbar Search-->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
               <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
               <div class="input-group-append">
                  <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
               </div>
            </div>
         </form>
         <!-- Navbar-->
         <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#">Activity Log</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                  </form>
               </div>
            </li>
         </ul>
      </nav>
      <div id="layoutSidenav">
         <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
               <div class="sb-sidenav-menu">
                  <div class="nav">
                     <a class="nav-link" href="{{URL::to('backend/dashboard')}}">
                        <h4>Dashboard</h4>
                     </a>
                     <a class="nav-link collapsed" href="product" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Product
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="product" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                           <a class="nav-link" href="{{URL::to('backend/product/create')}}">Create Product</a>
                           <a class="nav-link" href="{{URL::to('backend/product/list')}}">List Product</a>
                        </nav>
                     </div>
                     <a class="nav-link collapsed" href="customer" data-toggle="collapse" data-target="#customer" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Customer
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="customer" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                           <a class="nav-link" href="{{URL::to('backend/customer/create')}}">Create Customer</a>
                           <a class="nav-link" href="{{URL::to('/backend/customer/list')}}">List Customer</a>
                        </nav>
                     </div>
                     <a class="nav-link collapsed" href="supplier" data-toggle="collapse" data-target="#supplier" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Supplier
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="supplier" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                           <a class="nav-link" href="{{URL::to('backend/supplier/create')}}">Create Supplier</a>
                           <a class="nav-link" href="{{URL::to('/backend/supplier/list')}}">List Supplier</a>
                        </nav>
                     </div>
                     <a class="nav-link collapsed" href="purchase" data-toggle="collapse" data-target="#purchase" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Purchase
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="purchase" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                           <a class="nav-link" href="{{URL::to('backend/purchase/create')}}">Create Purchase</a>
                           <a class="nav-link" href="{{URL::to('backend/purchase/list')}}">List Purchase</a>
                        </nav>
                     </div>
                     <a class="nav-link collapsed" href="sell" data-toggle="collapse" data-target="#sell" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Sell
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="sell" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                           <a class="nav-link" href="{{URL::to('backend/sell/create')}}">Create Sell</a>
                           <a class="nav-link" href="{{URL::to('backend/sell/list')}}">List Sell</a>
                        </nav>
                     </div>
                     <a class="nav-link" href="{{URL::to('backend/stocks')}}">Stocks</a>
                     <a class="nav-link" href="{{URL::to('backend/settingss/create')}}">Setting</a>
                  </div>
               </div>
               <div class="sb-sidenav-footer">
                  <div class="small">Logged in as:</div>
                  Product Managment
               </div>
            </nav>
         </div>
         <div id="layoutSidenav_content">
            <main>
               @yield('content')
            </main>
            <footer class="py-4 bg-light mt-auto">
               <div class="container-fluid">
                  <div class="d-flex align-items-center justify-content-between small">
                     <div class="text-muted">Copyright &copy; Your Website 2020</div>
                     <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="{{ asset('assets/backend/js/scripts.js')}}"></script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
      <!-- <script src="{{ asset('assets/backend/assets/demo/chart-area-demo.js')}}"></script> -->
      <!-- <script src="{{ asset('assets/backend/assets/demo/chart-bar-demo.js')}}"></script> -->
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
      <script src="{{ asset('assets/backend/assets/demo/datatables-demo.js')}}"></script>
   </body>
</html>
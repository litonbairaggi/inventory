@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Imoprt data from Excel file
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
                            <p class="alert alert-success">{{ Session::get('message') }}</p>
                            @endif   

                            <form action="{{URL::to('/backend/product/import')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file">
                            <br>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection

@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Product Create
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/settingss/store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="setting_id" @if(!empty($settingProfile->id)) value="{{$settingProfile->id}}" @endif>
                                <div class="form-group">
                                    <label for="name">Company Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{$settingProfile->name}}" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="logo">Logo:</label>
                                    <input type="file" class="form-control" value="{{$settingProfile->logo}}" required  name="logo">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" value="{{$settingProfile->email}}" name="email" id="email">
                                </div>

                                <div class="form-group">
                                    <label for="facebook">Facebook:</label>
                                    <input type="text" class="form-control" value="{{$settingProfile->facebook}}" name="facebook" id="facebook">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="number" class="form-control" value="{{$settingProfile->phone}}" name="phone" id="phone">
                                </div>
                                
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" value="{{$settingProfile->address}}" name="address" id="address">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection

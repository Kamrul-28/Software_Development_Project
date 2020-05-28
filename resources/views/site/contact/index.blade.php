@extends('layouts.user')

@section('content')

<div class="container-fluid cardMargin py-5">
    <div class="row">
        <div class=" col h2 mb-5 text-center text-white">
            Available Donors
        </div>

    </div>
    <div class="row mx-5">
        @foreach($details as $value)
        <div class="col-lg-3">
            <div class="card cardStyle" style="width: 20rem;">
                <div class="card-head text-center">
                        <span class="text-danger">Blood Group:</span>
                        <span class="text-success">{{$value->blood_group}}</span> 
                </div>
                
                <div class="card-body text-center">

                   <div>{{$value->name}}</div>                  
                   <div>{{$value->address}}</div>              
                   <div>{{$value->email}}</div> 
                   <div> {{$value->contact_no}}</div>
                   
               

                </div>

            </div>

        </div>
        @endforeach

    </div>


</div>

@endsection
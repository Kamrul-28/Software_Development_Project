@extends('layouts.user')

@section('content')

<section id="featured">
    <div class="container">
            <div class="row searchRow">
                    <div class="card col-md-12">  
                            <div class="cart-head h4 p-2">
                                Donor Information
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Blood group</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Contact No</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">Height</th>
                                                <th scope="col">Weight</th>
                                                <th scope="col">Status</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach($details as $value)
                                        <tr>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->blood_group}}</td>                                  
                                            <td>{{$value->address}}</td>
                                            <td>{{$value->contact_no}}</td>
                                            <td>{{$value->gender}}</td>
                                            <td>{{$value->height}}</td>
                                            <td>{{$value->weight}}</td>
                                            <td class="text-success">Available</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                    </div>
            </div>

    </div>
</section>

@endsection
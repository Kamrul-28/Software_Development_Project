@extends('layouts.user')

@section('content')

<section id="featured">
    <div class="container">

            <div class="row">
                <div class="text-white searchHead col-md-4">
                
                        <form action="{{ route('AddressSearchRoute') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="pwd" class="text-white h5">Search by Address: </label>
                                <input type="text" placeholder="address" class="form-control" name="searchAddress"><br>
                                <input type="submit" class="btn btn-primary" value="search">
                            </div>
                        </form>

                </div>
            </div>
            <div class="row searchRow">
                @if(Auth::check())

                    <div class="card col-md-12">  
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
															<th scope="col">Status</th>
													</tr>

												</thead>
												<tbody>
														@foreach($searchAddress as $value)
														<tr>
															<td>{{$value->name}}</td>
															<td>{{$value->email}}</td>
															<td>{{$value->blood_group}}</td>                                  
															<td>{{$value->address}}</td>
															<td>{{$value->contact_no}}</td>
															<td>{{$value->gender}}</td>
															<td class="text-success">Available</td>
														</tr>
														@endforeach

												</tbody>
                                    </table>
                                </div>
                        </div>

                @else
                    <div class="card col-md-12">  
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Blood group</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Manage Blood</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach($searchAddress as $value)
                                        <tr>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->blood_group}}</td>
                                            <td>{{$value->address}}</td>
                                            <td>{{$value->gender}}</td>
                                            <td class="text-success">Available</td>
                                            <td><a href="{{ route('patientRoute',$value->id)}}">Manage</a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                    </div>
                    @endif
            </div>

    </div>
</section>

@endsection
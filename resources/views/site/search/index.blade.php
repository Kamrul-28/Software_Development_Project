@extends('layouts.user')

@section('content')


    <!-- section featured -->
    <section id="featured">
            <div class="container">
                <div class="row">

                      <div class="col-4 address">

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

                        <div class="col-4 ml-5 mt-5">

                            <form action="{{route('searchBloodRoute')}}" method="post">
                                    @csrf
                                <div class="form-group">
                                        <label for="pwd" class="text-white h5">Search By Blood Group: </label>
                                        <select name="search" id="" class="form-control" required>
                                            <?php $blood=bloodGroups(); ?>                                       
                                            <option value="">Select One</option>
                                            @foreach($blood as $value)
                                            <option value="{{$value}}">{{$value}}</option>
                                            @endforeach
                                        
                                        </select>
                                        <input type="submit" class="btn btn-primary" value="search">
                                    </div>
                                </form>
                        </div>
                        <div class="col-4 search mt-5">

                                <form action="{{ route('searchDistrictRoute') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="pwd" class="text-white h5">Search By District: </label>
                                        <select name="districtId" id="" class="form-control" required>
                                        
                                            <option value="">Select One</option>
                                            @foreach($district as $districts)
                                            <option value="{{$districts->id}}">{{$districts->district_name }}</option>
                                            @endforeach
                                    
                                        
                                        </select>
                                        <input type="submit" class="btn btn-primary" value="search">
                                    </div>
                                </form>

                        </div>               

                </div>
            

            </div>
                                        
    </section>
  <!-- end featured -->

@endsection
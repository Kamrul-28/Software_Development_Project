@extends('layouts.user')

@section('content')

    <!-- section featured -->
    <section id="featured">
            <div class="thShow">
                <div class="row">
                    <div class="col-md-4">
                            <form action="{{ route('searchThanaRoute') }}" method="post">
                                @csrf
                                   <div class="form-group">
                                        <label for="pwd" class="text-white h5">Select Thana: </label>
                                        <select name="thana_id" id="" class="form-control" required>
                                            <option value="">Select One</option>
                                            @foreach($thana as $value)
                                            <option value="{{$value->id}}">{{$value->thana_name}}</option>
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
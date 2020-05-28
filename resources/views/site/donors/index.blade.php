
@extends('layouts.user')

@section('content')

<!-- section featured -->
<section class="bg-dark">

        <div class="container">
                <div class="row">
                        
                        <div class="span12 text-center text-light h1">
                                Become a Donor
                        </div>
                </div>

        <div>

                <div class="dMargin">
                        <form action="{{ route('donorCreateRoute') }}" method="post">
                        @csrf
                        <div class="row mt-5">

                                <div class="col-4 p-4">

                                        <div class="form-group text-white">
                                                
                                                <p class="h5 text-center">Name:</p> 
                                                <input type="text" name="name" class="form-control" required placeholder="Name">  

                                        </div>

                                </div> 
                                <div class="col-4 p-4">

                                        <div class="form-group text-white">
                                                
                                                <p class="h5 text-center">Email:</p> 
                                                <input type="text" name="email" class="form-control" required placeholder="Email">

                                        </div>
                                
                                </div>    
                                
                                <div class="col-4 p-4">
                                
                                        <div class="form-group text-white">

                                                <p class="h5 text-center">Password:</p> 
                                                <input type="password" name="password" class="form-control" required placeholder="Password">

                                        </div>

                                </div>

                        </div>

                        <div class="row">

                                <div class="col-4 p-4">
                                
                                        <div class="form-group text-white">

                                                <p class="h5 text-center">Blood Group:</p>
                                                <?php $blood=bloodGroups(); ?>
                                                <select name="blood" id="" class="form-control">
                                                        <option value="">Select One</option>
                                                        @foreach($blood as $bloods)
                                                                <option value="{{$bloods}}">{{$bloods}}</option>
                                                        @endforeach
                                                </select>
                                        </div>

                                </div>

                                <div class="col-4 p-4">
                                
                                        <div class="form-group text-white">

                                                <p class="h5 text-center">Contact No:</p> 
                                                <input type="number" name="contact" class="form-control" required placeholder="Phone No">

                                        </div>

                                </div>

                                <div class="col-4 p-4">
                                
                                        <div class="form-group text-white">

                                                <p class="h5 text-center">Date of Birth:</p> 
                                                <input type="date" name="date_of_birth" class="form-control" required placeholder="Date Of Birth">

                                        </div>

                                </div>
                        </div>
                        
                        <div class="row">

                                <div class="col-4 p-4">

                                        <div class="form-group text-white">

                                                <p class="h5 text-center">Weight:</p> 
                                                <input type="text" name="weight" class="form-control" required placeholder="Weight">

                                        </div>

                                        </div>
                                        

                                        <div class="col-4 p-4">

                                                <div class="form-group text-white">

                                                        <p class="h5 text-center">Height:</p> 
                                                        <input type="text" name="height" class="form-control" required placeholder="Height">

                                                </div>

                                        </div>
                                        <div class="col-4 p-4">

                                        <div class="form-group text-white">

                                                        <p class="h5 text-center">Address:</p> 
                                                        <input type="text" name="address" class="form-control" required placeholder="Address">

                                        </div>

                                        </div>

                                        
                        </div>
                        


                                        <div class="row">

                                                


                                                <div class="col-4 p-4">

                                                        <div class="form-group text-white">

                                                                <p class="h5 text-center">School Name:</p> 
                                                                <select name="school" class="form-control">
                                                                        <option value="">Select One</option>
                                                                        @foreach($school as $schools)
                                                                        <option value="{{ $schools->id }}">{{$schools->school_name}}</option>
                                                                @endforeach
                                                                </select>
                                                                        

                                                        </div>

                                                </div>

                                                <div class="col-4 p-4">

                                                        <div class="form-group text-white">
                                                                <p class="h5 text-center">Gender:</p>
                                                                <input type="radio" value="male" name="gender"><span class="h5 mr-3">Male</span>
                                                                <input type="radio" value="female" name="gender"><span class="h5 mr-3">female</span>
                                                                <input type="radio" value="others" name="gender"><span class="h5 mr-3">others</span>
                                                        </div>

                                                </div>

                                        </div>
                        
                                        <div class="row">

                                                <div class="col-12 p-4">


                                                        <div class="form-group text-white">
                                                                
                                                                <input type="submit" value="submit" class="btn btn-primary ">                                                     

                                                        </div>
                                                
                                                </div>

                                        </div>
                                
                                </form>
                        </div>
                
                </div>
        </div>
</section>
<!-- end featured -->
@endsection
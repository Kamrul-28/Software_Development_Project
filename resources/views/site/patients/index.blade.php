@extends('layouts.user')

@section('content')

	<!-- section featured -->
	<section id="featured">

			<div class="container">
				<div class="row">
					<div class="span12 text-light h1">
						Plese Fill Up The Form
					</div>
                </div>
                
                <div>

                    <div>
                        <form action="{{route('patientCreateRoute',$donor_id)}}" method="post">
                            @csrf
                        <div class="row mt-5">

                                <div class="col-4">

                                            <div class="form-group text-white">
                                                    
                                                    <p class="h5 text-center">Name:</p> 
                                                    <input type="text" name="name" class="form-control" required placeholder="Name">  

                                            </div>

                                </div> 
                                <div class="col-4">

                                            <div class="form-group text-white">
                                                
                                                    <p class="h5 text-center">Email:</p> 
                                                    <input type="text" name="email" class="form-control" required placeholder="Email">

                                           </div>
                                    
                                </div>    
                                
                                <div class="col-4">
                                    
                                        <div class="form-group text-white">

                                                <p class="h5 text-center">Password:</p> 
                                                <input type="password" name="password" class="form-control" required placeholder="Password">

                                        </div>

                                </div>

                        </div>

                        <div class="row">
                    
                                <div class="col-4">
                                    
                                        <div class="form-group text-white">

                                                <p class="h5 text-center">Desises:</p> 
                                                <input type="text" name="desises" class="form-control" required placeholder="Desises">

                                        </div>

                                </div>

                                <div class="col-4">

                                        <div class="form-group text-white">

                                                <p class="h5 text-center">Description:</p> 
                                                <textarea rows="3" cols="30" name="description" class="form-control" required placeholder="Description"></textarea>      

                                        </div>
                                    
                                </div>

                                <div class="col-4">
                                    
                                    <div class="form-group text-white">

                                            <p class="h5 text-center">Hospital Name:</p> 
                                            <input type="text" name="hospital" class="form-control" required placeholder="Hospital Name">

                                    </div>

                            </div>
                        </div>
                                                    
                        <div class="row">

                                <div class="col-12">


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
@extends('layouts.user')

@section('content')

	<!-- section featured -->
	<section id="manage">

    <div class="manageLogin text-white">

            <a href="{{Route('login')}}" class="mx-3">Login</a>
             <br>
             <p class="pt-5 h2">If You are a patient then  
             <a class="mx-3 h2" href="{{ route('patientRoute',$donor_id)}}">Register As Patient</a></p>
             <br>
             <p class="h2 pt-2">or</p>
             <br>
              <a href="">Become a donor</a> 

    </div>

	</section>


@endsection
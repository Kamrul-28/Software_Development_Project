@extends('layouts.user')

@section('content')

	<!-- section featured -->
	<section class="about">

	</section>
	<!-- end featured -->

	<!-- Section about -->
	<section class="aboutSection">

		<div class="container">
			<div class="row">				
				
			        <div class="span12">
						
						<p class="text-center h1 text-dark">About Blood Donation</p> 
						 
					</div>
			</div>
		</div>

			   <div class="container">
					<div class="row">
			
							<div>
								<p class="h3">
								We celebrate World Blood Donor Day on 14 June every year. It was established across the countries in 2004, to spread the awareness for need to donate blood and thank the blood donors for their selfless work. These blood donation quotes will motivate you to donate blood and save somebody’s life. Be a hero, A real hero in someone’s life. There are various myths surrounding the blood donation activities. Actual awareness and right information can really benefit both the donor and recipient. Come forward and join the hands in this initiative.
								</p>
							</div>
						
					</div>
				
				</div>
	   </div>
	</section>

	<!-- end section about -->

	<section id="featured">

            <div class="h2 text-white">
                Available Donors List
            </div>

		<div class="container">
            

            <div class="my-5">
					<div class="row justify-content-center">
						<div class="col-md-10">

							@if(Auth::check())
								<div class="card">  
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
														@foreach($details as $value)
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
											<!--   Pagination -->
											<div class="paginate">
												{!! $details->render() !!}
											</div>

									</div>
								</div>
							@else

							<div class="card">  
								<div class="card-body">
									<table class="table">

											<thead>
												<tr>
												<th scope="col">Name</th>
												<th scope="col">Blood Group</th>
												<th scope="col">Address</th>
												<th scope="col">Gender</th>
												<th scope="col">Status</th>
												<th scope="col">Manage Blood</th>
												</tr>
											</thead> 
																					
											<tbody>
												
												@foreach($details as $value)
												<tr>
													<td>{{$value->name}}</td>
													<td>{{$value->blood_group}}</td>
													<td>{{$value->address}}</td>
													<td>{{$value->gender}}</td>
													<td class="text-success">Available</td>
													<td><a href="{{ route('manageRoute',$value->id)}}">Manage</a></td>
												</tr>
												@endforeach
									
											</tbody>

										</table>
										<!--   Pagination -->
										<div class="paginate">
											{!! $details->render() !!}
										</div>

								</div>
							</div>
							@endif
						
						</div>
						
					</div>
					

				</div>
				
		   </div>

		</section>
		

@endsection
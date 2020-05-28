@extends('layouts.layout')

@section('content')


        <a class="btn btn-primary" data-toggle="modal" href="#categoryAddModal">Add New Donor</a>


        @if(Session::has('success'))
        <div class="alert alert-success mt-2">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            <strong class="h5"> Success! </strong>  {{Session::get('success')}}

        </div>
        @endif


        <!--   Table for show -->

        <table class="table table-bordered table-striped mt-3">

                <thead>

                    <tr>
                             <th>Name</th>
                             <th>Blood Group</th>
                             <th>Email</th>
                             <th>Address</th>
                             <th>Contact No</th>                          
                             <th>Next Available Date</th>
                             <th>Action </th>

                    </tr>
                    
                </thead>

                <tbody>
               @foreach($data as $values)
                    <tr>
                           <td>{{$values->name}}</td>
                           <td>{{$values->blood_group}}</td>
                           <td>{{$values->email}}</td>                      
                           <td>{{$values->address}}</td>
                           <td>{{$values->contact_no}}</td>    
                           <td>{{$values->next_available_date}}</td>                
                           <td>
                               <form action="{{route('donorEditRoute')}}" method="post">
                                   @csrf
                               
                                    <button type="submit" class="btn btn-xs btn-warning butn mr-2" name="edit" value="{{$values->id}}">Edit</button>

                               </form>
                               <form action="{{route('donorDeleteRoute')}}" method="post">
                                   @csrf
                                    <button type="submit" class="btn btn-danger btnDelete mt-2" value="{{$values->id}}" name="delete">Delete</button>
                               </form>
                           </td>

                    </tr>

                @endforeach
                   

            

                </tbody>
        
        </table>


        <!--  Modal For Create -->

        <div class="modal fade" id="categoryAddModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-left">

                        <h4 class="modal-title">Add Donor</h4>

                    </div>

                    <form action="{{ route('donorAddRoute') }}" method="post">
                            @csrf
                        <div class="modal-body mx-5">

                            <h6>Name</h6>
                            <input type="text" name="name" class="form-control" required>  
                            
                            <h6 class="my-2">Email</h6>
                            <input type="text" name="email" class="form-control" required>

                            <h6 class="my-2">Password</h6>
                            <input type="password" name="password" class="form-control" required>

                            <h6 class="my-2">Blood Group</h6>
                            <input type="text" name="blood" class="form-control" required>

                            <h6 class="my-2">Contact No</h6>
                            <input type="text" name="contact" class="form-control" required>

                            <h6 class="my-2">School Name</h6>
                            <select name="school_id" class="form-control">
                               <option value="">----select----</option>
                                @foreach($school as $value)
                                <option value="{{$value->id}}">{{$value->school_name}}</option>
                                @endforeach
                            </select>

                            <h6 class="my-2">Address</h6>
                            <input type="text" name="address" class="form-control" required>

                            <h6 class="my-2">Date of Birth</h6>
                            <input type="date" name="date_of_birth" class="form-control" required>

                            <h6 class="my-2">height</h6>
                            <input type="text" name="height" class="form-control" required>

                            <h6 class="my-2">weight</h6>
                            <input type="text" name="weight" class="form-control" required>

                            <h6 class="my-2">Gender</h6>
                            <input type="radio" name="gender"  value="male" required>Male
                            <input type="radio" name="gender"  value="female" required>Female
                            <input type="radio" name="gender"  value="others" required>Others

                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Submit">

                        </div>

                    </form>
                </div>
            </div>
        </div>


        <!--  Modal For Create end -->
     
        

@endsection
@section('script')

    <script>
        $(function(){

                $('.btnDelete').click(function(e){
                    
                    if(confirm('Are you sure?'))
                    {
                            return true;
                    }

                    e.preventDefault();
                })

        })
    </script>

@endsection
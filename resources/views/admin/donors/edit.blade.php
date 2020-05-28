@extends('layouts.layout')

@section('content')



        <form action="{{ route('donorUpdateRoute') }}" method="post">
            @csrf
            <div class="mx-5">
                        <div class="h4 mb-4">
                            Edit Donor:
                        </div>
                        @foreach($user as $users)
                        <h6>Name</h6>
                        <input type="text" name="name" class="form-control" value="{{$users->name}}" required>  
                        
                        <h6 class="my-2">Email</h6>
                        <input type="text" name="email" class="form-control" value="{{$users->email}}" required>

                        <h6 class="my-2">Password</h6>
                        <input type="password" name="password" class="form-control" value="{{$users->password}}" required>
                        @endforeach
                        @foreach($data as $value)
                        <input type="hidden" name="id" value="{{$value->id}}">
                        <h6 class="my-2">Blood Group</h6>
                        <input type="text" name="blood" class="form-control" value="{{$value->blood_group}}" required>

                        <h6 class="my-2">height</h6>
                        <input type="text" name="height" class="form-control" value="{{$value->height}}" required>

                        <h6 class="my-2">weight</h6>
                        <input type="text" name="weight" class="form-control" value="{{$value->weight}}" required>
                        @endforeach
                        @foreach($donor_info as $row)

                        <h6 class="my-2">Contact No</h6>
                        <input type="text" name="contact" class="form-control" value="{{$row->contact_no}}" required>

                        <h6 class="my-2">Address</h6>
                        <input type="text" name="address" class="form-control" value="{{$row->address}}" required>

                        <h6 class="my-2">Date of Birth</h6>
                        <input type="date" name="date_of_birth" class="form-control" value="{{$row->date_of_birth}}" required>

                        @endforeach


                        <h6 class="my-2">School Name</h6>
                        <select name="school_id" class="form-control">
                        <option value="">----select----</option>
                            @foreach($school as $value)
                            <option value="{{$value->id}}">{{$value->school_name}}</option>
                            @endforeach
                        </select>

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


@endsection
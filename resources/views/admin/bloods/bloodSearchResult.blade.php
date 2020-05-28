@extends('layouts.layout')

@section('content')

      <!-- Blood Search-->

        <div class="searchBlood form-group">
                    
                <?php $value=bloodGroups(); ?>
            
                <form action="{{route('bloodSearchResultRoute')}}" method="post">
                    @csrf
                    <div class="col-4 float-left">

                        <select name="blood" id="blood" class="form-control">
                            <option value=""> -------Select Blood-------- </option>
                            @foreach($value as $blood)
                            <option value="{{$blood}}">{{$blood}}</option>                         
                            @endforeach
                        </select>
                    </div>
                    <div >
                        <input type="submit" value="Search" class="btn btn-primary">
                    </div>

                </form>
        
        </div>


        <!--   Table for show -->

        <table class="table table-bordered table-striped mt-3">

                <thead>

                    <tr>
                             <th>Name</th>
                             <th>Blood Group</th>
                             <th>Contact No</th>
                             <th>Email</th>
                             <th>Address</th>  
                             <th>Gender</th> 
                             <th>Availibelity</th>                        

                    </tr>
                    
                </thead>

                <tbody>
               @foreach($bloodSearch as $value)
                    <tr>
                           <td>{{$value->name}}</td>
                           <td>{{$value->blood_group}}</td>
                           <td>{{$value->contact_no}}</td>
                           <td>{{$value->email}}</td>
                           <td>{{$value->address}}</td>
                           <td>{{$value->gender}}</td>
                           <td><p class="text-success">Available</p></td>
                           
                    </tr>
                 
               @endforeach
            

                </tbody>
        
        </table>


      

@endsection
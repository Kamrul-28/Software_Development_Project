@extends('layouts.layout')

@section('content')


        <a class="btn btn-primary" data-toggle="modal" href="#categoryAddModal">Add New Thana</a>

        <!-- <div class="panel panel-default">
            <div class="panel-title">
                 title.........
            </div>
            <div class="panel-body">
                panel body..................
            </div>
        </div> -->

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
                             <th>Id</th>
                             <th>Thana Name</th>
                             <th>District Name</th>
                             <th>Action</th>

                    </tr>
                    
                </thead>

                <tbody>
                @foreach($data as $value)
                    <tr>
                           <td>{{$value->id}}</td>
                           <td>{{$value->thana_name}}</td>
                           <td>{{$value->district->district_name}}</td>
                           <td>
                               <button type="submit" class="btn btn-xs btn-warning butn mr-2 btnEdit" name="edit">Edit</button>
                         
                               <form action="{{route('thanaDeleteRoute')}}" method="post">
                                   @csrf
                                    <button type="submit" class="btn btn-danger btnDelete" value="{{$value->id}}" name="delete">Delete</button>
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

                        <h4 class="modal-title">Add Thana</h4>

                    </div>

                    <form action="{{ route('thanaAddRoute') }}" method="post">
                            @csrf
                        <div class="modal-body mx-5">

                            <div class="h6"> 
                                <label for="name">District Name</label>
                                <select name="district_id" id="" class="form-control" required>
                                    <option value="">----- select -----</option>
                                    @foreach($district as $value)
                                    <option value="{{$value->id}}">{{$value->district_name}}</option>
                                    @endforeach
                                </select>                     

                            </div>

                            <div class="my-3 h6">

                                <label for="name">Thana Name</label>
                                <input type="text" name="name" class="form-control" required> 

                            </div>                                                         

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


        <!--  Modal For Edit -->

        <div class="modal fade" id="categoryEditModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-left">

                        <h4 class="modal-title">Edit Thana</h4>

                    </div>

                    <form action="{{ route('thanaEditRoute') }}" method="post">
                            @csrf
                        <div class="modal-body mx-5">

                            <div class="h6"> 
                                <label for="district_name">District Name</label>
                                <select name="district_id" id="" class="form-control" required>
                                    <option value="">----- select -----</option>
                                    @foreach($district as $value)
                                    <option value="{{$value->id}}">{{$value->district_name}}</option>
                                    @endforeach
                                </select>                     

                            </div>

                            <div class="h6 mt-3">
                                <label for="thana_name">Thana Name</label>
                                <input type="hidden" name="id" class="form-control editId">
                                <input type="text" name="name" class="form-control editName" required>

                            </div>
                                                             

                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Save">

                        </div>

                    </form>
                </div>
            </div>
        </div>


        <!--  Modal For Edit end-->
        

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

                $('.btnEdit').click(function(){
                    
                   var id=$(this).parent().parent().find('td').eq(0).text();
                   var name=$(this).parent().parent().find('td').eq(1).text();

                   $('#categoryEditModal').modal()
                   $('.editId').val(id)
                   $('.editName').val(name)

                })
        })
    </script>

@endsection
<?php

namespace App\Http\Controllers;

use App\District;
use App\Thana;
use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
      $data=School::with(['thana'])->orderBy('id')->get();
      $district=District::orderBy('district_name')->get();
      $thana=Thana::orderBy('thana_name')->get();  

      return view('admin.schools.index',compact(['data','district','thana']));
       
    }

   

    public function create()
    {
        $school=new School();

        $school->school_name=request('name');
        $school->thana_id=request('thana_id');
        $res=$school->save();


        if($res=='true')
        {                
            return redirect()->back()->with('success','School Created Successfully !');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
    }

    public function destroy()
    {
        $data=School::find(request('delete'));      

        if($data)
            {  
                $data->delete();             
                return redirect()->back()->with('success','School Deleted');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }
          
    }


    public function update()
    {
        
        $school=School::find(request('id'));

        $school->school_name=request('name');
        $school->thana_id=request('thana_id');
        $res=$school->save();


        if($res=='true')
        {                
            return redirect()->back()->with('success','School Edited Successfully !');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
    }


}

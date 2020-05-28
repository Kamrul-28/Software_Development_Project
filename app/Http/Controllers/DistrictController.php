<?php

namespace App\Http\Controllers;

use App\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $data=District::all();
        return view('admin.districts.index',compact(['data']));
    }

    public function create()
    {
        $district=new District();

        $district->district_name=request('name');
        $res=$district->save();

        if($res=='true')
            {                
                return redirect()->back()->with('success','District Created Successfully !');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }
    }


    public function destroy()
    {
        $data=District::find(request('delete'));      

        if($data)
            {  
                $data->delete();             
                return redirect()->back()->with('success','District Deleted');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }
          
        
    }

    public function update()
    {
         $data=District::find(request('id'));
    
         $data->district_name=request('name');
         $res=$data->save();

         if($res=='true')
          {                
                return redirect()->back()->with('success','District Edited successfully');
               

          }else{

               return redirect()->back()->with('danger','Something went wrong');

          }
    }
}

<?php

namespace App\Http\Controllers;

use App\District;
use App\Thana;
use Illuminate\Http\Request;

class ThanaController extends Controller
{
    public function index()
    {
        $data=Thana::with('district')->orderBy('thana_name')->get();
        $district=District::all();
        
        return view('admin.thanas.index',compact(['data','district']));
    }


    public function create()
    {
        $thana=new Thana();

        $thana->thana_name=request('name');
        $thana->district_id=request('district_id');
        $res=$thana->save();

        if($res=='true')
            {                
                return redirect()->back()->with('success','Thana Created Successfully !');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }
    }

    public function destroy()
    {
        $data=Thana::find(request('delete'));      

        if($data)
            {  
                $data->delete();             
                return redirect()->back()->with('success','Thana Deleted');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }
          
        
    }


    public function update()
    {
         $data=Thana::find(request('id'));
    
         $data->thana_name=request('name');
         $data->district_id=request('district_id');
         $res=$data->save();

         if($res=='true')
          {                
                return redirect()->back()->with('success','District Edited successfully');
               

          }else{

               return redirect()->back()->with('danger','Something went wrong');

          }
    }


}

<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Donor_info;
use App\School;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DonorController extends Controller
{
    public function index()
    {
        $data=User::join('donors','donors.user_id','=','users.id')
                   ->join('donor_infos','donor_infos.donor_id','=','donors.id')
                   ->select('donors.*','users.*','donor_infos.*')
                   ->get();

        $school=School::all();

        return view('admin.donors.index',compact(['school','data']));
    }


    public function create()
    {
        $user=new User();

        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make(request('password'));
        $user->role='donor';
        $user->save();
        
        $donor=new Donor();

        $donor->school_id=request('school_id');
        $donor->user_id=$user->id;
        $donor->blood_group=request('blood');
        $donor->height=request('height');
        $donor->weight=request('weight');
        $res=$donor->save();

        $donor_info=new Donor_info();

        $donor_info->donor_id=$donor->id;
        $donor_info->date_of_birth=request('date_of_birth');
        $donor_info->address=request('address');
        $donor_info->contact_no=request('contact');
        $donor_info->gender=request('gender');
        $res=$donor_info->save();



        if($res=='true')
        {                
            return redirect()->back()->with('success','Donor Created Successfully !');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
    }

    public function destroy()
    {
        $data=Donor::find(request('delete'));      
        $user_id=$data->user_id;
        $user=User::find($user_id);
        
        if($user)
            {  
                $user->delete();             
                return redirect()->back()->with('success','Donor Deleted');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }
          
    }


    public function edit()
    {
        $data=Donor::where('id','=',request('edit'))->get();

        $donor_info=Donor_info::where('donor_id','=',request('edit'))->get();

        $donor=Donor::find(request('edit'));
       
        $user=User::where('id','=',$donor->user_id)->get();

        $school=School::all();

       
        return view('admin.donors.edit',compact(['data','donor_info','user','school']));
    }

    public function update()
    {
        $donor=Donor::find(request('id'));
  
        $donor_info=Donor_info::find($donor->id);
        
        $user=User::find($donor->user_id);


        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make(request('password'));
        $user->role='donor';
        $user->save();



        $donor->school_id=request('school_id');
        $donor->user_id=$user->id;
        $donor->blood_group=request('blood');
        $donor->height=request('height');
        $donor->weight=request('weight');
        $res=$donor->save();


        $donor_info->donor_id=$donor->id;
        $donor_info->date_of_birth=request('date_of_birth');
        $donor_info->address=request('address');
        $donor_info->contact_no=request('contact');
        $donor_info->gender=request('gender');
        $res=$donor_info->save();



        if($res=='true')
        {                
            return redirect('/admin/donor')->with('success','Donor Edited Successfully !');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }

        
    }

}

<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Donor_info;
use App\School;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    public function index()
    {
        $details=Donor::join('users','users.id','=','donors.user_id')
        ->join('donor_infos','donors.id','=','donor_infos.donor_id')
        ->select('users.*','donor_infos.*','donors.*')
        ->orderBy('donors.blood_group')
        ->paginate(10);
        return view('site.index',compact('details'));
    }

    public function donor()
    {
        $school=School::all();
        return view('site.donors.index',compact('school'));
    }

    public function donorCreate()
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
            return redirect('/site/index')->with('success','Donor Created Successfully !');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
    }


    public function contact()
    {

        $details=Donor::join('users','users.id','=','donors.user_id')
        ->join('donor_infos','donors.id','=','donor_infos.donor_id')
        ->select('users.*','donor_infos.*','donors.*')
        ->orderBy('donors.blood_group')
        ->get();

        return view('site.contact.index',compact(['details']));
    }
}

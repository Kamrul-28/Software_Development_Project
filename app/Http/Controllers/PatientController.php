<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Donor;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    public function index($id)
    {
        $donor_id=$id;  

        return view('site.patients.index',compact(['donor_id']));
    }

    public function create($id)
    {
        $donor_id=$id; 

        $user=new User();
        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make(request('password'));
        $user->role='patient';
        $user->save();

        $patient=new Patient();

        $patient->user_id=$user->id;
        $patient->desises=request('desises');
        $patient->save();

        $donation=new Donation();

        $donation->donor_id=$donor_id;
        $donation->description=request('description');
        $donation->donation_date=$patient->created_at;
        $donation->donation_place=request('hospital');
        $donation->save();

        $details=Donor::join('users','users.id','=','donors.user_id')
        ->join('donor_infos','donors.id','=','donor_infos.donor_id')
        ->select('users.*','donor_infos.*','donors.*')
        ->where('donors.id','=',$donor_id)
        ->get();



        return view('site.patients.donorDetails',compact(['details']));
    }

    public function manage($id){
        $donor_id=$id;
        return view('site.patients.manage',compact(['donor_id']));
    }
}

<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    public function index()
    {
        return view('admin.bloods.blood');
    }

    public function bloodSearch()
    {
       return view('admin.bloods.bloodSearch');
    }


    public function bloodSearchResult()
    {
         $bloodSearch=Donor::join('users','users.id','=','donors.user_id')
                            ->join('donor_infos','donors.id','=','donor_infos.donor_id')
                            ->select('users.*','donors.*','donor_infos.*')
                            ->where('donors.blood_group','like',request('blood'))
                            ->get();
         
                            return view('admin.bloods.bloodSearchResult',compact(['bloodSearch']));

    }
}
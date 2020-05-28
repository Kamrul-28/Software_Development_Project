<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Donor_info;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }


    public function searchAddress()
    {
        $req=request('searchAddress');

        $searchAddress=Donor::join('users','users.id','=','donors.user_id')
                            ->join('donor_infos','donors.id','=','donor_infos.donor_id')
                            ->select('users.*','donor_infos.*','donors.*')
                            ->where('donor_infos.address','like',"%{$req}%")
                            ->get();
        
        return view('admin.searchAddress',compact(['searchAddress']));
    }
}

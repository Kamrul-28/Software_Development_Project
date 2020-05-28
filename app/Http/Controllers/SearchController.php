<?php

namespace App\Http\Controllers;

use App\District;
use App\Donor;
use App\School;
use App\Thana;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $district=District::all();

        return view('site.search.index',compact(['district']));
    }

    public function searchBlood()
    {
        $searchBlood=Donor::join('users','users.id','=','donors.user_id')
                            ->join('donor_infos','donors.id','=','donor_infos.donor_id')
                            ->select('users.*','donors.*','donor_infos.*')
                            ->where('donors.blood_group','like',request('search'))
                            ->get();
         
                            return view('site.search.searchBlood',compact(['searchBlood']));
   
   
    }


    public function searchAddress()
    {
        $req=request('searchAddress');

        $searchAddress=Donor::join('users','users.id','=','donors.user_id')
                            ->join('donor_infos','donors.id','=','donor_infos.donor_id')
                            ->select('users.*','donor_infos.*','donors.*')
                            ->where('donor_infos.address','like',"%{$req}%")
                            ->get();
        
        return view('site.search.searchAddress',compact(['searchAddress']));
    }


    public function searchDistrict()
    {
        
        $thana=Thana::where('district_id','like',request('districtId'))
                     ->get();

        return view('site.search.SearchThana',compact(['thana']));

    }

    public function searchThana()
    {
       
    }


}

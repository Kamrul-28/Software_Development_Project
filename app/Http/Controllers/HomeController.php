<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $details=Donor::join('users','users.id','=','donors.user_id')
        ->join('donor_infos','donors.id','=','donor_infos.donor_id')
        ->select('users.*','donor_infos.*','donors.*')
        ->orderBy('donors.blood_group')
        ->paginate(10);
        return view('site.index',compact('details'));
    }
}

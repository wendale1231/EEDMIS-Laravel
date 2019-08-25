<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

    /**echo "<script>console.log('" . $request->dept . "')</script>";
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('/home');
    }
/////////// Departments    ///////////////////////////
    public function ibjt(){
        return view('department.IBJT');
    }

    public function burial(){
        return view('department.Burial');
    }

    public function admin(){
        return view('department.admin');
    }

    public function market(){
        $stalls = DB::table('stall_details')->get();
        $applicant = DB::table('stall_applicant')->get();
        return view('department.PublicMarket')->with('stalls',$stalls);
    }

}

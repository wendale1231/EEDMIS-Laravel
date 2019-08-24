<?php

namespace App\Http\Controllers;

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

    /**echo "<script>console.log('" . $request->dept . "')</script>";
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('/home');
    }

    public function ibjt(){
        return view('department.IBJT');
    }

    public function admin(){
        return view('department.admin');
    }
}

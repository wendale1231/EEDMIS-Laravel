<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
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
    public function home(){
        if(Auth::check()){
            $redirect_routes = [
                "Admin" => "admin.",
                "PublicMarket" => "market.",
                "Slaughterhouse" => "slaughter.",
                "IBJT" => "ibjt"
            ];
            return redirect()->route($redirect_routes[Auth::user()->dept] . 'dashboard.index');
        }
        else{
            echo "AN ERROR HAS OCCURED! PLEASE USE INCOGNITO BROWSER";
        }
    }

}

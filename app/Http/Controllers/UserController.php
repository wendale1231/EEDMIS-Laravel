<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function market(){
    	$stalls = DB::table('stalls')->get();
    	return view()
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stall;
use DB;


class UserController extends Controller
{
    public function market(){
    	$stalls = DB::table('stall_details')->get();
    	return view('department.PublicMarket')->with('stalls',$stalls);
    }

    public function update_stall($id){

    	$stall = Stall::find($id);

    	$stall->availability = false;

    	$stall->save();

    	return view('department.PublicMarket')->with('stalls',$stalls);

    }

}

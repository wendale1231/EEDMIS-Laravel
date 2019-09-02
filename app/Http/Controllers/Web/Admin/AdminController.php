<?php

namespace App\Http\Controllers\Web\Admin;

use App\StallApplicant;
use App\StallDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	
    public function index()
    {
    	$stall_count = StallDetail::get();
    	$stall_avail = StallDetail::where('availability', 1);
    	$stall_applicant = StallApplicant::get();
        return view('department.Admin.dashboard')->with(compact('stall_count','stall_avail','stall_applicant'));
    }
}

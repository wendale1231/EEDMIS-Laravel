<?php

namespace App\Http\Controllers\Web\PublicMarket;

use App\StallApplicant;
use App\StallDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StallDashboardController extends Controller
{
    public function index()
    {
        $stalls_details = StallDetail::get();
        $applicants = StallApplicant::get();
        return view('department.PublicMarket.dashboard')->with(compact('stalls_details','applicants'));
    }
    
}

<?php

namespace App\Http\Controllers\Web\Slaughterhouse;

use App\StallApplicant;
use App\StallDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecordsDashboardController extends Controller
{
	
    public function index()
    {
        return view('department.Slaughterhouse.dashboard');
    }
}

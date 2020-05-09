<?php

namespace App\Http\Controllers\Web\Admin;

use App\StallApplicant;
use App\StallDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportsDashboardController extends Controller
{
    public function index()
    {
        $stalls_details = StallDetail::get();
        $applicants = StallApplicant::get();
        return view('department.admin')
            ->with(compact('stalls_details'));
    }
}

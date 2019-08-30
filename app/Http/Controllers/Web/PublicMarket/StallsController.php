<?php

namespace App\Http\Controllers\Web\PublicMarket;

use App\StallDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StallsController extends Controller
{
    public function index()
    {
        $stalls_details = StallDetail::get();
        return view('department.PublicMarket.manage_stalls')
            ->with(compact('stalls_details'));
    }
    
}

<?php

namespace App\Http\Controllers\Web\PublicMarket;

use App\StallApplicant;
use App\StallDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterTenantController extends Controller
{
    public function index()
    {
        return view('department.PublicMarket.register_tenant');
    }
    
}

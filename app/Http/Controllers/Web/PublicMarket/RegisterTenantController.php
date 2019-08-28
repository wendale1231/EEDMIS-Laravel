<?php

namespace App\Http\Controllers\Web\PublicMarket;

use App\StallApplicant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class RegisterTenantController extends Controller
{
    public function index()
    {
        return view('department.PublicMarket.register_tenant');
    }


    public function store()
    {
        
        $user = DB::table('stall_applicant')->insert([
            'name' => $data['first_name'] . " " . $data['last_name'],
            'birthdate' => now(),
            'phone_number' => $data['phone'],
            'address' => $data['tenant_address'],
            'market_address' => $data['market_address'],
            'stall_name' => $data['stall_name'],
            'stall_category' => $data['stall_category'],
            'stall_id' => $data['stall_id'],
            'stall_description' => $data['stall_description']
        ]);
        
        
        return view('department.PublicMarket.register_tenant');
    }
}

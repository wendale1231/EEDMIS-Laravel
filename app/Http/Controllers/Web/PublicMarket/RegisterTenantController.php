<?php

namespace App\Http\Controllers\Web\PublicMarket;

use App\StallApplicant;
use App\StallDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


class RegisterTenantController extends Controller
{
    public function index()
    {
        $stalls = StallDetail::where('availability', 1)->get();
        return view('department.PublicMarket.register_tenant')->with(compact('stalls'));
    }


    public function store(Request $request)
    {

        $request->request->add(['birthdate' => date('Y-m-d H:i:s')]);
        $request->request->add(['name' => ($request['first_name'] . " " . $request['last_name'])]);
        $request->except(['first_name', 'last_name']);
        $tenant = StallApplicant::create($request->all());
        $message = 'Successfully added ' . $tenant->name;
        $tenant_id = StallApplicant::where('stall_id', $request->stall_id)->first();
        StallDetail::where('stall_code', $request->stall_id)->update(['availability'=> 0, 'tenant_id' => $tenant_id->applicant_id]);
        return redirect()->back()->with(compact('message'));
    }

}

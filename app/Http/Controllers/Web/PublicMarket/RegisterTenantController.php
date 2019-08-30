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


    public function store(Request $request)
    {

        $request->request->add(['birthdate' => date('Y-m-d H:i:s')]);
        $request->request->add(['name' => ($request['first_name'] . " " . $request['last_name'])]);
        $request->except(['first_name', 'last_name']);
        $tenant = StallApplicant::create($request->all());
        $message = 'Successfully added ' . $tenant->name;
   
        return redirect()->back()->with(compact('message'));
    }
}

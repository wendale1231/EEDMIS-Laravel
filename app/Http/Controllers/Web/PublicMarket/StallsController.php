<?php

namespace App\Http\Controllers\Web\PublicMarket;

use App\StallDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class StallsController extends Controller
{
    public function index()
    {
        $stalls_details = StallDetail::get();
        return view('department.PublicMarket.manage_stalls')
            ->with(compact('stalls_details'));
	}


    public function create()
    {
        StallDetail::insert(
    		['stall_type' => 'Undefined', 'availability' => 1]
		);
		$message = 'Successfully Added!';
   
        return redirect()->back()->with(compact('message'));
    }


    public function store(Request $request, $id)
    {
    	return $id;
    }


    public function show($id)
    {
        return $id;
    }


    public function edit(Request $request, $id)
    {
    	// return $request;
    	// return $request->stall_type;
    	StallDetail::where('stall_id', $id)
    	->update(['stall_type' => $request->stall_type]);
		$message = 'Successfully Updated!';
   
        return redirect()->back()->with(compact('message'));
    }


    public function update(Request $request, $id)
    {
    	return $id;
    }

    public function destroy($id)
    {
    	StallDetail::where('stall_id', '=', $id)->delete();
    	$message = 'Successfully DELETED!';
   
        return redirect()->back()->with(compact('message'));
    }

}

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


    public function create(Request $request)
    {
        return "hello";
        $generate_code;
        if($request->stall_type == 'red'){
            $generate_code = "m" . StallDetail::where('stall_type', $request->stall_type)->count();
        }
        else if($request->stall_type == 'blue'){
            $generate_code = "f" . StallDetail::where('stall_type', $request->stall_type)->count();
        }
        else if($request->stall_type == 'green'){
            $generate_code = "v" . StallDetail::where('stall_type', $request->stall_type)->count();
        }
        else if($request->stall_type == 'yellow'){
            $generate_code = "mis" . StallDetail::where('stall_type', $request->stall_type)->count();
        }
        StallDetail::insert(
	       ['stall_type' => $request->stall_type, 'availability' => 1, 'stall_code' => $generate_code, 'market_address' => $request->market_address]
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
    	->update(['stall_type' => $request->stall_type,
    		'market_address' => $request->market_address]);
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

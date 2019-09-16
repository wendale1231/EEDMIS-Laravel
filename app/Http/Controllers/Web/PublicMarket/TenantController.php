<?php

namespace App\Http\Controllers\Web\PublicMarket;

use App\StallApplicant;
use App\StallDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantController extends Controller
{
    public function index()
    {
        $tenant_details = StallApplicant::get();
        return view('department.PublicMarket.manage_tenant')->with(compact('tenant_details'));
	}


 //    public function create(Request $request)
 //    {
 //        // return "hello";
 //        $generate_code;
 //        if($request->stall_type == 'red'){
 //            $generate_code = "m" . StallDetail::where('stall_type', $request->stall_type)->count();
 //        }
 //        else if($request->stall_type == 'blue'){
 //            $generate_code = "f" . StallDetail::where('stall_type', $request->stall_type)->count();
 //        }
 //        else if($request->stall_type == 'green'){
 //            $generate_code = "v" . StallDetail::where('stall_type', $request->stall_type)->count();
 //        }
 //        else if($request->stall_type == 'yellow'){
 //            $generate_code = "mis" . StallDetail::where('stall_type', $request->stall_type)->count();
 //        }
 //        StallDetail::insert(
	// ['stall_type' => $request->stall_type, 'availability' => 1, 'stall_code' => $generate_code, 'market_address' => $request->market_address]
	// 	);
	// 	$message = 'Successfully Added!';
   
 //        return redirect()->back()->with(compact('message'));
 //    }


 //    public function store(Request $request, $id)
 //    {
 //    	return $id;
 //    }


    public function show($id)
    {
        $tenant_data = StallApplicant::where('applicant_id' , $id)->first();
        $details = '<div class="modal-content">'.'
                <div class="modal-header">'.'
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>'.'
                    <h4 class="modal-title" id="myModalLabel">More About ' . $tenant_data->name . '</h4>'.'
                    </div>'.'
                <div class="modal-body">'.'
                    <center>'.'
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>'.'
                    <h3 class="media-heading">' . $tenant_data->name . '</h3>'.'
                    <span><strong>Stall Details: </strong></span>'.'<span class="label label-info">' . $tenant_data->stall_category . '</span>'.'
                    <span class="label label-info">'. $tenant_data->market_address . '
                    </center>'.'
                    <hr>'.'
                    <center>'.'
                    <p class="text-left"><strong>Birthday: </strong><br>'. $tenant_data->birthdate .'
                    <p class="text-left"><strong>Gender: </strong><br>'. $tenant_data->gender .'
                    <p class="text-left"><strong>Phone Number: </strong><br>'. $tenant_data->phone_number .'
                    <p class="text-left"><strong>Address: </strong><br>'. $tenant_data->address .'
                    <p class="text-left"><strong>Stall Name: </strong><br>'. $tenant_data->stall_name .'
                    <p class="text-left"><strong>Stall Description: </strong><br>'. $tenant_data->stall_description .'
                    <br>'.'
                    </center>'.'
                </div>'.'
                <div class="modal-footer">'.'
                    <center>'.'
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'.'
                    </center>'.'
                </div>'.'
            </div>';
        return $details;
    }


 //    public function edit(Request $request, $id)
 //    {
 //    	// return $request;
 //    	// return $request->stall_type;

 //    	StallDetail::where('stall_id', $id)
 //    	->update(['stall_type' => $request->stall_type,
 //    		'market_address' => $request->market_address]);
	// 	$message = 'Successfully Updated!';
   
 //        return redirect()->back()->with(compact('message'));
 //    }


 //    public function update(Request $request, $id)
 //    {
 //    	return $id;
 //    }

    public function destroy($id)
    {
    	StallApplicant::where('applicant_id', '=', $id)->delete();
        StallDetail::where('tenant_id', $id)->update(['tenant_id' => 'none', 'availability' => 1]);
    	$message = 'Successfully DELETED!';
        
        return redirect()->back()->with(compact('message'));
    }

}

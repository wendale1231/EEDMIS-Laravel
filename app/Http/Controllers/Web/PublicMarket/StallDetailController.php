<?php
 namespace App\Http\Controllers\Web\PublicMarket;
 use App\Http\Requests\StallDetailStoreRequest;
use App\StallDetail;
use App\Http\Controllers\Controller;
 class StallDetailController extends Controller
{
    public function index()
    {
        $details = StallDetail::paginate();
        return view('department.PublicMarket.stall-detail')->with(compact('details'));
    }
     public function show(StallDetail $stall_detail)
    {
        return $stall_detail;
    }
     public function store(StallDetailStoreRequest $request)
    {
        $new_stall_detail = StallDetail::create($request->all());
        return $new_stall_detail;
    }
     public function update(StallDetailStoreRequest $request, StallDetail $stall_detail)
    {
        $stall_detail->update($request->all());
        return $stall_detail;
    }
}
<?php

namespace App\Http\Controllers\Web\Slaughterhouse;

use App\SlaughterhouseTransaction;
use App\SlaughterhousePrices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    
    public function index()
    {
        $transactions = SlaughterhouseTransaction::get();
        return view('department.Slaughterhouse.add_transaction')->with(compact('transactions'));
    }


    public function create()
    {
    //     StallDetail::insert(
    // ['stall_type' => 'Undefined', 'availability' => 1, 'stall_code' => 'undefined', 'market_address' => 'undefined']
    //     );
        $message = 'Successfully Added!';
   
        return redirect()->back()->with(compact('message'));
    }


    public function store(Request $request)
    {
        SlaughterhouseTransaction::insert([
            'client_name' => $request->first_name . " " . $request->last_name,
            'client_address' => $request->address,
            'species' => $request->species,
            'unit' => $request->unit,
        ]);
        $message = 'Successfully Added!';
        return redirect()->back()->with(compact('message'));
    }


    public function show($id)
    {
        return $id;
    }


    public function edit(Request $request, $id)
    {

        // SlaughterhouseTransaction::where('stall_id', $id)
        // ->update(['client_' => $request->stall_type,
        //     'stall_code' => $generate_code, 'market_address' => $request->market_address]);
        $message = 'Successfully Updated!';
   
        return redirect()->back()->with(compact('message'));
    }


    public function update(Request $request, $id)
    {
        return $id;
    }

    public function destroy($id)
    {
        SlaughterhouseTransaction::where('stall_id', '=', $id)->delete();
        $message = 'Successfully DELETED!';
   
        return redirect()->back()->with(compact('message'));
    }
}

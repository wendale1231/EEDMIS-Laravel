<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function home(){
    	return view('/login');
    }


    public function check_login(Request $request){
		$this->validate($request, [
			'email'   => 'required|email',
			'password'  => 'required|alphaNum|min:3'
		]);

		$user_data = array(
			'email'  => $request->get('email'),
			'password' => $request->get('password')
		);

		if(Auth::attempt($user_data)){
			return view('../home');
		}
		else{
			return back()->with('error', 'Wrong Login Details');
		}

	}

	function successlogin(){
		return view('successlogin');
	}

	function logout(){
		Auth::logout();
		return redirect('logout');
	}

}

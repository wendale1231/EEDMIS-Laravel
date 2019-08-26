<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // echo {{Auth::user()->dept}};
    protected function authenticated(Request $request, $user)
    {
        $redirect_routes = [
            "PublicMarket" => "admin."
        ];

        /*
         * ikaw na bahala adjust ani.
         * basta ang pag login i redirect nato thru route names.
         * For example, ang admin man gud tanan route names kay naay prefix na "admin"
         * E.g admin.dashboard.index, admin.dashboard.get
         *
         * So, sunod mag himo kag routes para sa guest users
         * imong buhaton i prefix nimo ang route name ug "guest"
         * E.g guest.dashboard.index
         *
         * Kani na route: return redirect()->route($redirect_routes[ $user['dept'] ] . 'dashboard');
         * kay mahimo syang <user_dept>.dashboard
         * */
        return redirect()->route($redirect_routes[ $user['dept'] ] . 'dashboard.index');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

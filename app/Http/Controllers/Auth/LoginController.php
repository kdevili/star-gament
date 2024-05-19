<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function authenticated($request, $user)
    {
        if ($user->status !== 'Active') {
            Auth::login($user);
            return redirect()->intended('/blocked');
        } elseif ($user->role === 'Superadmin') {
            Auth::login($user);
            return redirect()->intended('/super_admin');
        } elseif ($user->role === 'Group Level') {
            Auth::login($user);
            return redirect()->intended('/group_level');
        } elseif ($user->role === 'Cluster Level') {
            Auth::login($user);
            return redirect()->intended('/cluster_level');
        } elseif ($user->role === 'Facility Level') {
            Auth::login($user);
            return redirect()->intended('/facility_level');
        } elseif ($user->role === 'Recoder') {
            Auth::login($user);
            return redirect()->intended('/recoder');
        } else
            return redirect()->intended('/login');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function loggedOut(Request $request) {
        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->status == 'Active') {
            if (Auth::user()->role == 'Superadmin') {
                return redirect('super_admin');
            } elseif (Auth::user()->role == 'Group Level') {
                return redirect('group_level');
            } elseif (Auth::user()->role == 'Cluster Level') {
                return redirect('cluster_level');
            } elseif (Auth::user()->role == 'Facility Level') {
                return redirect('facility_level');
            }elseif (Auth::user()->role == 'Recoder') {
                return redirect('recoder');
            }
        }else{
            return redirect('blocked');
        }
        return redirect('logout');

//        return view('home');
       // return redirect('super_admin/lay');
    }

}

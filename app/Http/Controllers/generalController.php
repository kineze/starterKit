<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class generalController extends Controller
{
    public function index(){
        

        return view('web.index');
    }

    public function home(){

        if (Auth::check()) {
            $user = Auth::user();

                if (session()->has('redirect_after_login')) {
                    $redirectTo = session()->pull('redirect_after_login');
                    return redirect($redirectTo);
                }

                if ($user->hasRole('SuperAdmin')) {
                    return redirect()->route('generalDashboard');
                } else{
                    return redirect()->route('generalDashboard');
                }
        }else{
            return redirect()->route('login');
        }
    }

    public function setDashboard()
    {

        if (Auth::check()) {
            $user = Auth::user();

            if (session()->has('redirect_after_login')) {
                $redirectTo = session()->pull('redirect_after_login');
                return redirect($redirectTo);
            }
    
            
            if ($user->hasRole('SuperAdmin')) {
                return redirect()->route('generalDashboard');
            } else {
                return redirect()->route('generalDashboard');
            }
        }

        return redirect('/dashboard');
    }

    public function generalDashboard(){


        return view('dashboards.general.index');
    }
}

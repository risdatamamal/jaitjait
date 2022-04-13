<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated()
    {
        if (Auth::user()->role_id == 1) {
            return redirect('/admin/dashboard');
        } elseif (Auth::user()->role_id == 2) {
            return redirect('/tailor/dashboard');
        } elseif (Auth::user()->role_id == 3) {
            return redirect('/');
        }
    
     return redirect('/');
    }
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

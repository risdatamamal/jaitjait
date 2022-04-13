<?php

namespace App\Http\Controllers\Tailor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardTailorController extends Controller
{
    public function index() 
    {
        return view('pages.tailor.dashboard');
    }
}

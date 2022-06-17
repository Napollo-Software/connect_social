<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        if (Auth::user()->roles->slug=='ambassador'){
            return view('ambassador.profile');
        }
        return view('admin.dashboard');
    }


}

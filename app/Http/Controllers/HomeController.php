<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($type=null)
    {   //dd(auth()->user()->tier_0());
        if (Auth::user()->roles->slug == 'ambassador') {          
            $user = auth()->user();
            return view('ambassador.home.index', compact( 'user','type'));
        }
        return view('admin.dashboard');
    }

}

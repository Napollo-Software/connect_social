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
<<<<<<< HEAD
    {   //dd(auth()->user()->tier_0());
        if (Auth::user()->roles->slug == 'ambassador') {          
=======
    {
        if (Auth::user()->roles->slug == 'ambassador') {
>>>>>>> a52a0794b709810eb12797a00e166e35d68153b6
            $user = auth()->user();
            return view('ambassador.home.index', compact( 'user','type'));
        }
        return view('admin.dashboard');
    }

}

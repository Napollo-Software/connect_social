<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::user()->roles->slug == 'ambassador') {
            $user = auth()->user();
            return view('ambassador.home.index', compact( 'user'));
        }
        return view('admin.dashboard');
    }

}

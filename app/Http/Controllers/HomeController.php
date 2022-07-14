<?php

namespace App\Http\Controllers;

use App\Http\Traits\ChartOfAccount;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    use ChartOfAccount;
    public function index($type=null)
    {

        if (Auth::user()->roles->slug == 'ambassador') {
            $user = auth()->user();
            return view('ambassador.home.index', compact( 'user','type'));
        }
        return view('admin.dashboard');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($type=null)
    {
        if (Auth::user()->roles->slug == 'ambassador') {
            if ($type){


            }else{
                $posts = Post::orderBy('created_at', 'DESC')->get();
            }
            $user = auth()->user();
            return view('ambassador.home.index', compact( 'user','posts'));
        }
        return view('admin.dashboard');
    }

}

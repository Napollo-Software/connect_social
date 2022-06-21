<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        if (Auth::user()->roles->slug=='ambassador'){
            $posts= Post::where('user_id',auth()->user()->id)->orderBy('created_at','DESC')->get();
            return view('ambassador.profile.index',compact('posts'));
        }
        return view('admin.dashboard');
    }


}

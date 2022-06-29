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
    public function index($type=null)
    {
        if (Auth::user()->roles->slug == 'ambassador') {
            if ($type){
                if ($type=='friends'){
                    $friends=getFriendsList(auth()->user()->id);
                    $us=[];
                    foreach ($friends as $friend){
                        $us[]=getFriendDetails($friend);
                    }
                    $friends=getArrayFromKeyofEloquent($us,'id');
                    $posts = Post::whereIn('user_id',$friends)->orderBy('created_at', 'DESC')->get();
                }
                if ($type=='connections'){
                    $friends=getConnectionsList(auth()->user()->id);
                    $us=[];
                    foreach ($friends as $friend){
                        $us[]=getConnectionDetails($friend);
                    }
                    $friends=getArrayFromKeyofEloquent($us,'id');
                    $posts = Post::whereIn('user_id',$friends)->orderBy('created_at', 'DESC')->get();
                }

            }else{
                $posts = Post::orderBy('created_at', 'DESC')->get();
            }
            $user = auth()->user();
            return view('ambassador.home.index', compact( 'user','posts'));
        }
        return view('admin.dashboard');
    }

}

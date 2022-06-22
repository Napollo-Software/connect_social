<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        if (Auth::user()->roles->slug=='ambassador'){
            $posts= Post::where('user_id',auth()->user()->id)->orderBy('created_at','DESC')->get();
            $images=[];
            foreach (File::files(public_path('storage/profile/'.auth()->user()->email)) as $file){
                $images[]= Storage::disk('local')->url('/profile/'.auth()->user()->email.'/'.$file->getFilename());
            }
            foreach (File::files(public_path('storage/a/covers/'.auth()->user()->id)) as $file){
                $images[]= Storage::disk('local')->url('/a/covers/'.auth()->user()->id.'/'.$file->getFilename());
            }
            return view('ambassador.profile.index',compact('posts','images'));
        }
        return view('admin.dashboard');
    }


}

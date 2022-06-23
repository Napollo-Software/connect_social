<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id = null)
    {


        if (Auth::user()->roles->slug == 'ambassador') {
            if ($id) {
                ($id == auth()->user()->id) ? ( $user = auth()->user() ) : ( $user = User::find($id) );
            } else {
                $user = auth()->user();
            }

            $posts = Post::where('user_id', $id)->orderBy('created_at', 'DESC')->get();
            $images = [];
            if (File::isDirectory(public_path('storage/profile/' . $user->email))) {
                foreach (File::files(public_path('storage/profile/' . $user->email)) as $file) {
                    $images[] = Storage::disk('local')->url('/profile/' . $user->email . '/' . $file->getFilename());
                }
            }
            if (File::isDirectory(public_path('storage/a/covers/' . $id))) {
                foreach (File::files(public_path('storage/a/covers/' . $id)) as $file) {
                    $images[] = Storage::disk('local')->url('/a/covers/' . $id . '/' . $file->getFilename());
                }
            }
            $friends=Friend::where('from',auth()->user()->id)->where('status',\Friends::STATUS_APPROVED)->orwhere('to',auth()->user()->id)->where('status',\Friends::STATUS_APPROVED)->get();
            return view('ambassador.profile.index', compact('posts', 'images', 'user','friends'));
        }
        return view('admin.dashboard');
    }


}

<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    //
    public function index($type = 'all')
    {
        $user=auth()->user();
        $assets = [];
        if ($type=='all' or $type=='image'){
            if (File::isDirectory(public_path('storage/profile/' . auth()->user()->email))) {
                foreach (File::files(public_path('storage/profile/' . auth()->user()->email)) as $file) {
                $assets[] = ['type' => 'image', 'url' => Storage::disk('local')->url('/profile/' . auth()->user()->email . '/' . $file->getFilename()),];
            }}
            if (File::isDirectory(public_path('storage/a/covers/' . auth()->user()->id))) {
                foreach (File::files(public_path('storage/a/covers/' . auth()->user()->id)) as $file) {
                    $assets[] = ['type' => 'image', 'url' => Storage::disk('local')->url('/a/covers/' . auth()->user()->id . '/' . $file->getFilename())];
                }
            }
        }
        $posts = Post::where('user_id', auth()->user()->id)->get();
        foreach ($posts as $post) {
            if ($post->assets()->exists()) {
                if ($type=='all' or $type==$post->assets->type){
                    $assets[] = ['type' => $post->assets->type, 'url' => $post->assets->data(),'asset'=>$post->assets];
                }
            }
        }
        return view('ambassador.gallery.index', compact('assets','type','user'));
    }
}

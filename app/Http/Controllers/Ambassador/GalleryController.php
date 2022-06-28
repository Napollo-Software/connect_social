<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\Translation\t;

class GalleryController extends Controller
{
    //
    public function index(Request $request)
    {
        $type = $request->type;
        $user = auth()->user();
        return view('ambassador.gallery.index', compact('type', 'user'));
    }

    public function fetch(Request $request)
    {
        $assets = [];
        $type = $request->type;
        if ($type == 'all' or $type == 'image') {
            if (File::isDirectory(public_path('storage/profile/' . auth()->user()->email))) {
                foreach (File::files(public_path('storage/profile/' . auth()->user()->email)) as $file) {
                    $assets[] = ['type' => 'image', 'url' => Storage::disk('local')->url('/profile/' . auth()->user()->email . '/' . $file->getFilename()),];
                }
            }
            if (File::isDirectory(public_path('storage/a/covers/' . auth()->user()->id))) {
                foreach (File::files(public_path('storage/a/covers/' . auth()->user()->id)) as $file) {
                    $assets[] = ['type' => 'image', 'url' => Storage::disk('local')->url('/a/covers/' . auth()->user()->id . '/' . $file->getFilename())];
                }
            }
        }
        $posts = Post::where('user_id', auth()->user()->id)->get();
        foreach ($posts as $post) {
            if ($post->assets()->exists()) {
                if ($type == 'all' or $type == $post->assets->type) {
                    $assets[] = ['type' => $post->assets->type, 'url' => $post->assets->data(), 'asset' => $post->assets];
                }
            }
        }
        $html = '';
        if ($type == 'audio') {
            $html.='<div class="audio-grid-main">';
            foreach($assets as $asset){
                $html.='<div class="audio-grid-col">
                                <div class="audio-grid-col-inner">
                                    <div class="audio-file-name">
                                        <div class="name">'.substr($asset['asset']['file'],10).'</div>
                                        <div class="date">'.$asset['asset']['created_at']->format('F d, Y').'</div>
                                    </div>
                                    <div class="audio-grid-col-audio">
                                        <audio controls>
                                            <source src="'.$asset['url'].'" type="audio/mpeg">
                No audio support.
                                        </audio>
                                        <div class="select-gallary-item">
                                            <div class="select-gallary-item-inner">
                                                <input type="checkbox">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
            }

            $html .= '</div>';

        } else {
            $html .= '<div class="gallary-grid-main">';
            foreach ($assets as $asset) {
                $html .= '<div class="gallary-grid-col">
                                <div class="gallary-grid-col-inner">
                                    <div class="gallary-grid-col-image">';
                if ($asset['type'] == 'image') {
                    $html .= '<img src="' . $asset['url'] . '" alt="">';
                } elseif ($asset['type'] == 'video') {
                    $html .= '<video src="' . $asset['url'] . '" style="width: 100%;height: 100%"></video>';
                }
                $html .= '                                        <div class="select-gallary-item">
                                            <div class="select-gallary-item-inner">
                                                <input type="checkbox">
                                            </div>
                                        </div>';
                if ($asset['type'] == 'video') {
                    $html .= '<div class="play-video-icon">
                                           </div>';
                }
                $html .= '</div>
                                </div>
                            </div>';
            }
            $html .= '</div>';
        }
        return response()->json($html);
    }
}

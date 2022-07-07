<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostAssets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
                    $assets[] = ['source'=>'profile','type' => 'image','asset_directory'=>auth()->user()->email,'asset_name'=>$file->getFilename(),'post_id'=>'null' ,'url' => Storage::disk('local')->url('/profile/' . auth()->user()->email . '/' . $file->getFilename()),];
                }
            }
            if (File::isDirectory(public_path('storage/a/covers/' . auth()->user()->id))) {
                foreach (File::files(public_path('storage/a/covers/' . auth()->user()->id)) as $file) {
                    $assets[] = ['source'=>'cover','type' => 'image','asset_name'=>$file->getFilename(),'asset_directory'=>auth()->user()->id,'post_id'=>'null', 'url' => Storage::disk('local')->url('/a/covers/' . auth()->user()->id . '/' . $file->getFilename())];
                }
            }
        }
        $posts = Post::where('user_id', auth()->user()->id)->get();
        foreach ($posts as $post) {
            if ($post->assets()->exists()) {
                if ($type == 'all' or $type == $post->assets->type) {
                    $asset_name=postAsset($post->id);
                    $assets[] = ['source'=>'post','type' => $post->assets->type,'asset_name'=>$asset_name,'post_id'=>$post->id,'asset_directory'=>'asset','url' => $post->assets->data(), 'asset' => $post->assets];
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
                                                <input type="checkbox" class="select-asset" data-asset="'.$asset['asset_name'].'" data-asset-directory="'.$asset['asset_directory'].'" data-id="'.$asset['post_id'].'" data-source="'.$asset['source'].'" data-path="'.$asset['url'].'">
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

    public function delete(Request $request)
    {
        $post_url=$request->post_url;
        $post_source=$request->post_source;
        $post_id=$request->post_id;
        $post_asset=$request->post_asset;
        $post_directory=$request->post_directory;
        $count=count($post_id);
        for($i=0;$i<$count;$i++)
        {
            if($post_id[$i]!=null && $post_source[$i]=='post')
            {
                Post::where('id',$post_id[$i])->delete();
                Storage::disk('local')->delete('/a/posts/' . $post_asset[$i]);

            }elseif($post_id[$i]==null && $post_source[$i]='profile'){

                Storage::disk('local')->delete('/profile/tier00@connectsocial.com/1657112531images');
            
            }elseif($post_id[$i]==null && $post_source[$i]='cover_photo'){

                Storage::disk('local')->delete('/a/covers/' . $post_directory[$i] . '/' . $post_asset[$i]);
            
            }
           
        }
        Storage::disk('local')->delete(path:'/profile/tier00@connectsocial.com/1657112531images.png');
        return response()->json($post_asset);
    }
}

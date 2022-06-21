<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostAssets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(Request $request){
        if ($request->file_type){
            $postAsset=new PostAssets();
            if ($request->file_type=='link'){
                $this->validate($request,[
                    'url'=>'required',
                ]);
                $postAsset->file=$request->url;
            }else{
                if ($request->file_type=='audio'){
                    $this->validate($request,[
                        'attachment'=>'required',
                    ]);
                }
                if ($request->file_type=='image'){
                    $this->validate($request,[
                        'attachment'=>'required|mimes:jpeg,jpg,png,gif',
                    ]);
                }
                if ($request->file_type=='video'){
                    $this->validate($request,[
                        'attachment'=>'required',
                    ]);
                }
                $attachment = time() . $request->attachment->getClientOriginalName();
                Storage::disk('local')->put('/public/a/posts/' . $attachment, File::get($request->attachment));
                $postAsset->file=$attachment;
            }
            $postAsset->type=$request->file_type;
        }else{
            $this->validate($request,[
                'details'=>'required',
            ]);
        }
        $this->validate($request,[
            'privacy'=>'required'
        ]);

        $post= new Post();
        $post->user_id=auth()->user()->id;
        $post->details=$request->details;
        $post->privacy=$request->privacy;
        $post->save();
        if ($request->file_type){
            $postAsset->post_id=$post->id;
            $postAsset->save();
        }
        return response()->json(['success'=>'Post added successfully']);
    }
    public function destroy(Request $request){
        $post=Post::find($request->id);
        $post->comments()->delete();
        $post->likes()->delete();
        $post->assets->delete();
        $post->delete();
        return response()->json(['success'=>'Deleted']);
    }
    //
}

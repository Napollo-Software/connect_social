<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function store(Request $request){
        
        $post= new Post();
        $post->user_id=auth()->user()->id;
        $post->details=$request->details;
        $post->save();
        $this->validate($request,[
            'details'=>'required',
        ]);
        return response()->json(['success'=>'Post added successfully']);
    }
    public function destroy(Request $request){
        $post=Post::find($request->id);
        $post->delete();
        return response()->json(['success'=>'Deleted']);
    }
    
}

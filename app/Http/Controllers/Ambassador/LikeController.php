<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    //
    public function store(Request $request)
    {
        $find = Like::where('post_id', $request->post)->where('user_id', auth()->user()->id)->first();
        $data = ['post_id'=>$request->post];
        if ($find) {
            $find->delete();
            return response()->json(['success' => 'un-liked', 'data' => $data]);
        }
        $like = new Like();
        $like->post_id = $request->post;
        $like->user_id = auth()->user()->id;
        $like->save();
        return response()->json(['success' => 'liked', 'data' => $data]);

    }
}

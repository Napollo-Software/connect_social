<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request){
        $this->validate($request,[
           'comment'=>'required'
        ]);
        $comment=new Comment();
        $comment->user_id=auth()->user()->id;
        $comment->post_id=$request->post_id;
        $comment->text=$request->comment;
        $comment->save();
        return response()->json(['success'=>'Added','data'=>$comment]);
    }
}

<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
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
        $commentHtml='<div class="singal-comment-row" ><div class="singal-comment-row-inner"><div class="singal-comment-row-user-image"> <div class="singal-comment-row-user-image-inner"> <img src="'.auth()->user()->profile_image().'" alt=""> </div> </div> <div class="singal-comment-row-comment-text">'.$comment->text.'</div> </div> </div>';
        $showMoreCommentsHtml='<div class="view-more-comments"><div class="view-more-comments-inner"><a href="javascript:void(0)" class="show-more-comments" data-post="'.$comment->post->id.'">View more comments</a></div></div>';
        $data=[
            'comment_html'=>$commentHtml,
            'more_comments_html'=>$showMoreCommentsHtml,
            'more_comments_toggle'=>$comment->post->comments->count()==6?true:false,
            'total_comments'=> $comment->count()
        ];
        return response()->json(['success'=>'Added','data'=>$data]);
    }
    public function show_more(Request $request){
        $post=Post::find($request->post);
        $previousComments=$post->comments->take($request->previous);
        $id=[];
        foreach ($previousComments as $comment){
            $id[]=$comment->id;
        }
        $nextCount=($request->previous%5==0)?5:5-($request->previous%5);
        $nextComments=$post->comments->whereNotIn('id',$id)->take($nextCount);
        $nextHtml=null;
        foreach ($nextComments as $comment){
            $myProfile=$comment->user->id==auth()->user()->id?'profile_photo_preview':null;
            $nextHtml.='<div class="singal-comment-row" >
                                        <div class="singal-comment-row-inner">
                                            <div class="singal-comment-row-user-image">
                                                <div class="singal-comment-row-user-image-inner">
                                                    <img src="'.$comment->user->profile_image().'" alt="" class="'.$myProfile.'">
                                                </div>
                                            </div>
                                            <div class="singal-comment-row-comment-text">
                                             '.$comment->text.' 
                                            </div>
                                        </div>
                                    </div>';
        }
        return response()->json($nextHtml);
    }
}

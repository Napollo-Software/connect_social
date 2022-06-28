<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Connection;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;

class FriendsController extends Controller
{
    //
    public function show($id=null){
        return view('ambassador.profile.friends-list', compact('friends','user','connections'));
    }
    public function send_request(Request $request){
        if (Friend::where('from',auth()->user()->id)->where('to',$request->to)->get()->count()==0){
            $friends=new Friend();
            $friends->from=auth()->user()->id;
            $friends->to=$request->to;
            $friends->save();
        }
        return response()->json(['success'=>'sent']);
    }
    public function cancel_request(Request $request){
        $req=Friend::where('from',auth()->user()->id)->where('to',$request->id)->where('status',0)->first();
        $req->delete();
        return response()->json(['success'=>'removed']);
    }
    public function remove_friend(Request $request){
        $req=Friend::where('from',auth()->user()->id)->where('to',$request->id)->where('status',1)->first();
        if ($req){
            $req->delete();
        }
        $req=Friend::where('to',auth()->user()->id)->where('from',$request->id)->where('status',1)->first();
        if ($req){
            $req->delete();
        }
        return response()->json(['success'=>'removed']);
    }

    public function action(Request $request){
        $action=Friend::where('to',auth()->user()->id)->where('from',$request->id)->first();
        if($request->status==1){
            $action->status=$request->status;
            $action->save();
        }else{
            $action->delete();
        }
        return response()->json(['success'=>'actioned']);
    }

}

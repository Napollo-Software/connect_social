<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Connection;
use Illuminate\Http\Request;

class ConnectionsController extends Controller
{
    //
    public function send_request(Request $request){
        if (Connection::where('from',auth()->user()->id)->where('to',$request->to)->get()->count()==0){
            $friends=new Connection();
            $friends->from=auth()->user()->id;
            $friends->to=$request->to;
            $friends->save();
        }
        return response()->json(['success'=>'sent']);
    }
    public function action(Request $request){
        $action=Connection::where('to',auth()->user()->id)->where('from',$request->id)->first();
        if($request->status==1){
            $action->status=$request->status;
            $action->save();
        }else{
            $action->delete();
        }
        return response()->json(['success'=>'actioned']);
    }
    public function cancel_request(Request $request){
        $req=Connection::where('from',auth()->user()->id)->where('to',$request->id)->where('status',0)->first();
        $req->delete();
        return response()->json(['success'=>'removed']);
    }
    public function remove_connection(Request $request){
        $req=Connection::where('from',auth()->user()->id)->where('to',$request->id)->where('status',1)->first();
        if ($req){
            $req->delete();
        }
        $req=Connection::where('to',auth()->user()->id)->where('from',$request->id)->where('status',1)->first();
        if ($req){
            $req->delete();
        }
        return response()->json(['success'=>'removed']);
    }
}

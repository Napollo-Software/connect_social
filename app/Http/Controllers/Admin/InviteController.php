<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuperadminReferral;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    //
    public function index(){
        $link=SuperadminReferral::first();
        return view('admin.invite',compact('link'));
    }
    public function send(Request $request){
        $this->validate($request,[
           'email'=>'required|string|email|max:255|unique:users',
           'name'=>'required|string|max:255'
        ]);
        $message=invite_email_text($request->name);
        sendEmail($request->email,null,$request->subject,$message);



        $all=SuperadminReferral::all();
        if ($all->count()>0){
            $link=SuperadminReferral::first();
        }else{
            $link=new SuperadminReferral();
        }
        $link->start_time=date('Y-m-d H:i:s');
        $link->end_time=date('Y-m-d H:i:s',(time()+(5*60)));
        $link->save();

        return response()->json(['success'=>'Invitation sent successfully!']);
    }
}

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
        return response()->json(['success'=>'Invitation sent successfully!']);
    }
}

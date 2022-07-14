<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SendInviteController extends Controller
{
    public function send_invite(Request $request){
        foreach ($request->email as $k=>$v){
            $request->validate([
                'email.'.$k => ['required', 'distinct','unique:users,email'],
            ],[
                'unique'=> $v.' is already taken'
            ]);
        }

        $resp='Email is sent to ';
        $notresp=null;



        foreach ($request->email as $email){
            if (in_array('@',str_split($email))){
                $username=explode('@',$email);
                $username=$username[0];
                $html=invite_email_text($username);
                sendEmail($email,null,'Connect Social Invitation',$html);
                $resp.=$email.' ';
            }else{
                $notresp.=$email.', ';
            }
        }
        $notresp ? $notresp = 'Error in sending mail to '.$notresp : null;
        return response()->json(['success'=>$resp.' .'.$notresp]);
    }
    //
}

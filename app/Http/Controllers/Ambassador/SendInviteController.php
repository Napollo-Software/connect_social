<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendInviteController extends Controller
{
    public function send_invite(Request $request){
        //dd($request->all());

        $request->email=explode(',',$request->email);
        $this->validate(\request(),[
           'email.*'=>'users:unique'
        ]);
        $resp='Email is sent to ';
        $notresp=null;
        $emails=explode(',',$request->email);
        foreach ($emails as $email){
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

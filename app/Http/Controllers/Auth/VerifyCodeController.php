<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerifyCodeController extends Controller
{
    //
    public function resend_code(Request $request){

        $emailcode=rand(100000,999999);
        $message='<h6>Email Verification:</h6>
Dear '.auth()->user()->fullName().',<br>
Congrats! You are one step away to be our part!<br>
You need to verify your email address to activate your account. Please use the following 5-digit One Time Password (OTP) to complete your sign-up procedure. <br>
'.$emailcode.'<br>
Do not provide this code to anyone else to keep your important data confidential. If you are receiving this email without registering, contact us.<br>
For any help, seek our assistance at abcdef@gmail.com.<br>
With Best Regards,<br>
Connect Social';
        sendEmail(auth()->user()->email,'connectsocial@napollo.net','Almost There! Confirm Your Email',$message);
        $user = User::find(auth()->user()->id);
        $user->email_code = $emailcode;
        $user->save();

        return response()->json(['success' => 'Another verification code has been sent to your email.!']);

    }
    public function verify_code(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|digits:6|integer'
        ]);
        if (!auth()->user()->email_verified_at) {
            if ($request->code == auth()->user()->email_code) {
                $user = User::find(auth()->user()->id);
                $user->email_verified_at = date('Y-m-d H:i:s');
                $user->save();
                return response()->json(['success' => 'Your email address is verified successfully.!']);
            } else {
                $response['message'] = ['Invalid OTP !'];
                return response()->json([
                    'status' => 'failed',
                    'status_code' => 422,
                    'errors' => $response,
                ], 422);
            }
        } else {
            $response['message'] = ['Email already verified !'];
            return response()->json([
                'status' => 'failed',
                'status_code' => 422,
                'errors' => $response,
            ], 422);
        }
    }
}

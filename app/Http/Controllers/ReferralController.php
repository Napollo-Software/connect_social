<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferralController extends Controller
{
    //
    public function referral_link($name,$id){
        return view('referral',compact('name','id'));
    }
    public function sign_up(Request $request){
        $referer=$request->referer;
        return view('sign_up',compact('referer'));
    }
}

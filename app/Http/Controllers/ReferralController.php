<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ReferralController extends Controller
{
    //
    public function referral_link($name,$id){
        return view('referral',compact('name','id'));
    }
    public function sign_up(Request $request){
        if (!Auth::user()){
            $referer=$request->referer;
            return view('sign_up',compact('referer'));
        }
        return view('admin.dashboard');
    }
}

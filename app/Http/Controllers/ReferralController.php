<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferralController extends Controller
{
    public function referral_link($name,$id){
        return view('referral',compact('name','id'));
    }
    public function join_as(Request $request){
        if (!Auth::user()){
            $referer=$request->referer;
            $ref=User::find($referer);
            return view('join_as',compact('ref'));
        }
        return redirect()->route('dashboard');
    }

    public function sign_up(Request $request){
        if (!Auth::user()){
            $referer=$request->referer;
            $by=$request->by;
            $role=$request->role;
            return view('sign_up',compact('referer','by','role'));
        }
        return redirect()->route('dashboard');

    }
}

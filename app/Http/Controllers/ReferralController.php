<?php

namespace App\Http\Controllers;

use App\Models\SuperadminReferral;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferralController extends Controller
{
    public function referral_link($name,$id){
        $ref=User::find($id);
        return view('join_as',compact('ref'));
    }
    public function sign_up(Request $request){
        if (!Auth::user()){
            $referer=$request->referer;
            $by=$request->by;
            $role=$request->role;
            return view('sign_up',compact('referer','by','role'));
        }
        return redirect()->route('home');
    }
    public function store(Request $request){
        $all=SuperadminReferral::all();
        if ($all->count()>0){
            $link=SuperadminReferral::first();
        }else{
            $link=new SuperadminReferral();
        }
        $link->start_time=date('Y-m-d H:i:s');
        $link->end_time=date('Y-m-d H:i:s',(time()+(5*60)));
        $link->save();
        return response()->json(['success'=>'Referral link renewed successfully for 5 min!']);
    }
}

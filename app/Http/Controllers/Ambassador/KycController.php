<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\AmbassadorDetails;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class KycController extends Controller
{
    public function submission(){
        return view('ambassador.kyc.submission'); 
    }
    public function submit(Request $request){
        
        // $this->validate($request,[
        //     'country_code'=>'required',
        //     'phone'=>'required',

        //     'fname'=>'required',
        //     'lname'=>'required',

        //     'state'=>'required',
        //     'city'=>'required',
        //     'country'=>'required',
        //     'address_1'=>'required',
        //     'address_2'=>'required',

        //     'date_of_birth'=>'required',
        //     'passport_no'=>'required',
        //     'passport_1'=>'required',
        //     'passport_2'=>'required',
        //     'id_card_1'=>'required',
        //     'id_card_2'=>'required',

        // ]); 
        $profile=User::find(auth()->user()->id);
        $profile->fname=$request->fname;
        $profile->lname=$request->lname;
        $attachment = time() . $request['profile']->getClientOriginalName();
        Storage::disk('local')->put('/public/profile/' . auth()->user()->email . '/' . $attachment, File::get($request['profile']));
        $profile->profile = $attachment;
        $profile->phone=$request->phone;
        $profile->save();
        $ambassador=AmbassadorDetails::find(auth()->user()->details->id);
        $ambassador->state=$request->state;
        $ambassador->city=$request->city;
        $ambassador->country=$request->country;
        $ambassador->address_1=$request->address_1;
        $ambassador->address_2=$request->address_2;
        $ambassador->date_of_birth=$request->date_of_birth;
        $ambassador->passport_no=$request->passport_no;
        $ambassador->passport_1=$request->passport_1;
        $ambassador->passport_2=$request->passport_2;
        $ambassador->id_card_1=$request->id_card_1;
        $ambassador->id_card_2=$request->id_card_2;
        $ambassador->kyc_status=0;
        $ambassador->save();
        return response()->json(['success'=>'KEC data is sent for submission.']);
    }
}

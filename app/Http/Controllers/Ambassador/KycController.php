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
        $this->validate($request,[
            'country_code'=>'required',
            'phone'=>'required',

            'fname'=>'required',
            'lname'=>'required',

            'state'=>'required',
            'city'=>'required',
            'country'=>'required',
            'address_1'=>'required',
            'address_2'=>'required',

            'date_of_birth'=>'required',
            'passport_no'=>'required',
            'driving_license'=>'required',
            'cnic_pics'=>'required',
            // 'id_card_1'=>'required',
            // 'id_card_2'=>'required',

        ]); 
        
        $profile=User::find(auth()->user()->id);
        $profile->fname=$request->fname;
        $profile->lname=$request->lname;
        if($request['profile']!=null){
        $attachment = time() . $request['profile']->getClientOriginalName();
        Storage::disk('local')->put('/public/profile/' . auth()->user()->email . '/' . $attachment, File::get($request['profile']));
        $profile->profile = $attachment;
        }
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
        if(count($request['driving_license'])>1){
        $passport_1 = time() . $request['driving_license']['0']->getClientOriginalName();
        Storage::disk('local')->put('/public/profile/' . auth()->user()->email . '/' . $passport_1, File::get($request['driving_license']['0']));
        $ambassador->passport_1=$passport_1;
        }
        if(count($request['driving_license'])>1){
        $passport_2 = time() . $request['driving_license']['1']->getClientOriginalName();
        Storage::disk('local')->put('/public/profile/' . auth()->user()->email . '/' . $passport_2, File::get($request['driving_license']['1']));
        $ambassador->passport_2=$passport_2;
       }
       if(count($request['cnic_pics'])>1){
        $id_card_1 = time() . $request['cnic_pics']['0']->getClientOriginalName();
        Storage::disk('local')->put('/public/profile/' . auth()->user()->email . '/' . $id_card_1, File::get($request['cnic_pics']['0']));
        $ambassador->id_card_1=$id_card_1;
       }
       if(count($request['cnic_pics'])>1){
        $id_card_2 = time() . $request['cnic_pics']['1']->getClientOriginalName();
        Storage::disk('local')->put('/public/profile/' . auth()->user()->email . '/' . $id_card_2, File::get($request['cnic_pics']['1']));
        $ambassador->id_card_2=$id_card_2;
       }
        $ambassador->kyc_status=1;
        $ambassador->save();
        return response()->json(['success' => 'Added Successfully']);
    }
}

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



    public function submit(Request $request)
    {
        if (auth()->user()->details->kyc_status == 0){
            $response['message'] = ['You have already requested for KYC!'];
            return response()->json([
                'status' => 'failed',
                'status_code' => 422,
                'errors' => $response,
            ], 422);
        }
        if (auth()->user()->details->kyc_status == \KYC::STATUS_APPROVED){
            $response['message'] = ['Your KYC is already approved!'];
            return response()->json([
                'status' => 'failed',
                'status_code' => 422,
                'errors' => $response,
            ], 422);
        }

        $this->validate($request, [
            'country_code' => 'required',
            'phone' => 'required',

            'fname' => 'required',
            'lname' => 'required',

            'state' => 'required',
            'city' => 'required',
            'country' => 'required',
            'address_1' => 'required',

            'date_of_birth' => 'required',
            'passport_no' => 'required',

        ]);

        $ambassador = AmbassadorDetails::find(auth()->user()->details->id);
        if ($ambassador->passport_1==null){
            $this->validate($request,[
                'driving_license' => 'required|array|min:2|max:2',
            ]);
        }
        if ($ambassador->id_card_1==null){
            $this->validate($request,[
                'cnic_pics' => 'required|array|min:2|max:2',
            ]);
        }

        $profile = User::find(auth()->user()->id);
        $profile->fname = $request->fname;
        $profile->lname = $request->lname;
        if ($request['profile'] != null) {
            $attachment = time() . $request['profile']->getClientOriginalName();
            Storage::disk('local')->put('/public/profile/' . auth()->user()->email . '/' . $attachment, File::get($request['profile']));
            $profile->profile = $attachment;
        }
        $profile->phone = $request->phone;
        $profile->save();
        $ambassador->state = $request->state;
        $ambassador->city = $request->city;
        $ambassador->country = $request->country;
        $ambassador->address_1 = $request->address_1;
        $ambassador->address_2 = $request->address_2;
        $ambassador->date_of_birth = $request->date_of_birth;
        $ambassador->passport_no = $request->passport_no;
        if ($request['driving_license']){
            if (count($request['driving_license']) > 1) {
                $passport_1 = time() . $request['driving_license']['0']->getClientOriginalName();
                Storage::disk('local')->put('/public/passport/' . $passport_1, File::get($request['driving_license']['0']));
                $ambassador->passport_1 = $passport_1;
            }
            if (count($request['driving_license']) > 1) {
                $passport_2 = time() . $request['driving_license']['1']->getClientOriginalName();
                Storage::disk('local')->put('/public/passport/' . $passport_2, File::get($request['driving_license']['1']));
                $ambassador->passport_2 = $passport_2;
            }
        }
        if ($request['cnic_pics']){
            if (count($request['cnic_pics']) > 1) {
                $id_card_1 = time() . $request['cnic_pics']['0']->getClientOriginalName();
                Storage::disk('local')->put('/public/cnic_pics/' . $id_card_1, File::get($request['cnic_pics']['0']));
                $ambassador->id_card_1 = $id_card_1;
            }
            if (count($request['cnic_pics']) > 1) {
                $id_card_2 = time() . $request['cnic_pics']['1']->getClientOriginalName();
                Storage::disk('local')->put('/public/cnic_pics/' . $id_card_2, File::get($request['cnic_pics']['1']));
                $ambassador->id_card_2 = $id_card_2;
            }
        }
        $ambassador->kyc_status = 0;
        $ambassador->save();
        return response()->json(['success' => 'You have successfully applied for KYC']);
    }
}

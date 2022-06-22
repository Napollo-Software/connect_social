<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\AmbassadorDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function update_name(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
        ], [
            'fname.required' => 'Fist name field is required *',
            'lname.required' => 'Last name field is required *',
        ]);
        $user = User::find(auth()->user()->id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->save();
        return response()->json(['success' => 'updated', 'response' => $user]);
    }
    public function update_about(Request $request)
    {
        $this->validate($request, [
            'about' => 'required',
        ], [
            'about.required' => 'About field is required *',
        ]);
        $detail=AmbassadorDetails::find(auth()->user()->details->id);
        $detail->about = $request->about;
        $detail->save();
        return response()->json(['success' => 'updated', 'response' => $detail]);
    }
    public function update_cover(Request $request)
    {
        $this->validate($request, [
            'cover' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ], [
            'cover.required' => 'About field is required *',
        ]);
        $attachment = time() . $request['cover']->getClientOriginalName();
        Storage::disk('local')->put('/public/a/covers/'.auth()->user()->id.'/' . $attachment, File::get($request['cover']));
        $detail=AmbassadorDetails::find(auth()->user()->details->id);
        $detail->cover_photo = $attachment;
        $detail->save();
        $response=Storage::disk('local')->url('/a/covers/'.auth()->user()->id.'/'.$attachment);
        return response()->json(['success' => 'updated', 'response' => $response]);
    }
    public function update_profile(Request $request)
    {
        $this->validate($request, [
            'profile' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ], [
            'profile.required' => 'Photo field is required *',
        ]);
        $attachment = time() . $request['profile']->getClientOriginalName();
        Storage::disk('local')->put('/public/profile/'.auth()->user()->email.'/' . $attachment, File::get($request['profile']));
        $user = User::find(auth()->user()->id);
        $user->profile = $attachment;
        $user->save();

        $response=$user->profile_image();
        return response()->json(['success' => 'updated', 'response' => $response]);
    }




    public function update_social_info(Request $request)
    {
        $this->validate($request, [
            "city" => "required",
            "state" => "required",
            "relationship" => "required",
            "workplace" => "required",
            "high_school" => "required",
            "hobbies" => "required",
            "gender" => "required"
        ], [
            'city.required' => 'City field is required *',
            'state.required' => 'State field is required *',
            'relationship.required' => 'Relationship field is required *',
            'workplace.required' => 'Workplace field is required *',
            'high_school.required' => 'High School field is required *',
            'hobbies.required' => 'Hobbies field is required *',
            'gender.required' => 'Gender field is required *',
        ]);
        $user = User::find(auth()->user()->id);
        $user->gender = $request->gender;
        $user->save();
        $detail=AmbassadorDetails::find($user->details->id);
        $detail->city=$request->city;
        $detail->state=$request->state;
        $detail->relationship=$request->relationship;
        $detail->workplace=$request->workplace;
        $detail->high_school=$request->high_school;
        $detail->hobbies=$request->hobbies;
        $detail->save();
        return response()->json(['success' => 'updated', 'response' => $request->all()]);
    }
}

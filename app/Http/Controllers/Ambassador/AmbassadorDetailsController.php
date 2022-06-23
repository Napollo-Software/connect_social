<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\AmbassadorDetails;
use App\Models\User;
use Illuminate\Http\Request;

class AmbassadorDetailsController extends Controller

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

<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\AmbassadorDetails;
use App\Models\Connection;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index($id = null){

        if ($id) {
            ($id == auth()->user()->id) ? ( $user = auth()->user() ) : ( $user = User::find($id) );
        } else {
            $user = auth()->user();
            $id=auth()->user()->id;
        }
        $images = [];
        if (File::isDirectory(public_path('storage/profile/' . $user->email))) {
            foreach (File::files(public_path('storage/profile/' . $user->email)) as $file) {
                $images[] = Storage::disk('local')->url('/profile/' . $user->email . '/' . $file->getFilename());
            }
        }
        if (File::isDirectory(public_path('storage/a/covers/' . $id))) {
            foreach (File::files(public_path('storage/a/covers/' . $id)) as $file) {
                $images[] = Storage::disk('local')->url('/a/covers/' . $id . '/' . $file->getFilename());
            }
        }
        $type='friends';
        $posts = Post::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();
        return view('ambassador.profile.index', compact('posts', 'images', 'user','type'));
    }

    public function fetch(Request $request)
    {
        $html='';
        $type=$request->type;
        if($type=='friends')
        {  
            $html.='<div class="friend-grid-inner">';
            foreach(getFriendsListUsers(auth()->user()->id) as $k=>$friend){if($k<15){
            $html.='<div class="friend-grid-col">
                <div class="friend-grid-col-inner">
                    <div class="firend-grid-col-image">
                        <img src="'.$friend->profile_image().'" alt="">
                    </div>
                    <div class="friend-grid-col-text">
                        <a href="'.url('profile-view/'.$friend->id).'" class="text-decoration-none text-muted">'.$friend->fullName().'</a>
                    </div>
                </div>
            </div>';
             } } 
             $html .= '</div>';
             
        }
        if($type=='connections')
        {
            $html.='<div class="friend-grid-inner">';
            foreach(getConnectionsListUsers(auth()->user()->id) as $k=>$connection){if($k<15){
            $html.='<div class="friend-grid-col">
                <div class="friend-grid-col-inner">
                    <div class="firend-grid-col-image">
                        <img src="'.$connection->profile_image().'" alt="">
                    </div>
                    <div class="friend-grid-col-text">
                        <a href="'.url('profile-view/'.$connection->id).'" class="text-decoration-none text-muted">'.$connection->fullName().'</a>
                    </div>
                </div>
            </div>';
             } } 
             $html .= '</div>';
            
        }
        if($type=='tier_1')
        {
            $html.='<div class="friend-grid-inner">';
            foreach(auth()->user()->tier_1() as $k=>$tier1){if($k<15){
            $html.='<div class="friend-grid-col">
                <div class="friend-grid-col-inner">
                    <div class="firend-grid-col-image">
                        <img src="'.$tier1->profile_image().'" alt="">
                    </div>
                    <div class="friend-grid-col-text">
                        <a href="'.url('profile-view/'.$tier1->id).'" class="text-decoration-none text-muted">'.$tier1->fullName().'</a>
                    </div>
                </div>
            </div>';
             } } 
             $html .= '</div>';
        }
        if($type=='tier_2')
        {
            $html.='<div class="friend-grid-inner">';
            foreach(auth()->user()->tier_2() as $k=>$tier2){if($k<15){
            $html.='<div class="friend-grid-col">
                <div class="friend-grid-col-inner">
                    <div class="firend-grid-col-image">
                        <img src="'.$tier2->profile_image().'" alt="">
                    </div>
                    <div class="friend-grid-col-text">
                        <a href="'.url('profile-view/'.$tier2->id).'" class="text-decoration-none text-muted">'.$tier2->fullName().'</a>
                    </div>
                </div>
            </div>';
             } } 
             $html .= '</div>';
        }
        return response()->json($html);
    }

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
        $detail = AmbassadorDetails::find(auth()->user()->details->id);
        $detail->about = $request->about;
        $detail->save();
        return response()->json(['success' => 'updated', 'response' => $detail]);
    }

    public function update_cover(Request $request)
    {
        $this->validate($request, [
            'cover' => 'required|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ], [
            'cover.required' => 'Cover field is required *',
        ]);
        $attachment = time() . $request['cover']->getClientOriginalName();
        Storage::disk('local')->put('/public/a/covers/' . auth()->user()->id . '/' . $attachment, File::get($request['cover']));
        $detail = AmbassadorDetails::find(auth()->user()->details->id);
        $detail->cover_photo = $attachment;
        $detail->save();
        $response = Storage::disk('local')->url('/a/covers/' . auth()->user()->id . '/' . $attachment);
        return response()->json(['success' => 'updated', 'response' => $response]);
    }

    public function update_profile(Request $request) 
    {
        $this->validate($request, [
            'profile' => 'required|mimes:jpeg,png,jpg,gif,svg|file|max:4000',
        ], [
            'profile.required' => 'Photo field is required *',
        ]);
        $attachment = time() . $request['profile']->getClientOriginalName();
        Storage::disk('local')->put('/public/profile/' . auth()->user()->email . '/' . $attachment, File::get($request['profile']));
        $user = User::find(auth()->user()->id);
        $user->profile = $attachment;
        $user->save();

        $response = $user->profile_image();
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
        $detail = AmbassadorDetails::find($user->details->id);
        $detail->city = $request->city;
        $detail->state = $request->state;
        $detail->relationship = $request->relationship;
        $detail->workplace = $request->workplace;
        $detail->high_school = $request->high_school;
        $detail->hobbies = $request->hobbies;
        $detail->save();
        return response()->json(['success' => 'updated', 'response' => $request->all()]);
    }

    public function update_privacy(Request $request)
    {
        $detail = AmbassadorDetails::find(auth()->user()->details->id);
        if ($detail->privacy) {
            $data = unserialize($detail->privacy);
        } else {
            $data = [
                'about' => 'friends',
                'city' => 'friends',
                'state' => 'friends',
                'relationship' => 'friends',
                'joining' => 'friends',
                'high_school' => 'friends',
                'workplace' => 'friends',
                'hobbies' => 'friends',
                'phone' => 'friends',
            ];
        }
        if (array_key_exists($request->key, $data)) {
            foreach ($data as $key => $value) {
                if ($key == $request->key) {
                    $data[$key] = $request->value;
                }
            }
        } else {
            $data += [$request->key => $request->value];
        }
        $detail->privacy = serialize($data);
        $detail->save();
        return response()->json(['success' => 'updated']);
    }

    public function show_control(Request $request){
        $from=auth()->user()->id;
        $to=$request->id;
        $cancelConnectionRequest='    <button class="black-button mr-2 cancel-connection-request">Cancel Connection Request</button>';

        $sendMessage='                <button class="black-button mr-2">Send Message</button>';
        $addAsFriend="                <button class='black-button mr-2 sent-request' id='add-as-friend' data-to='".$to."'>Add as Friend</button>";
        $confirmFriendRequest='       <button class="black-button mr-2 friend-request-sent approve" data-id="'.$to.'">Confirm Friend Request</button>';
        $rejectFriendRequest='        <button class="black-button mr-2 friend-request-sent decline" data-id="'.$to.'">Delete Friend Request</button>';
        $cancelFriendRequest="        <button class='black-button mr-2 cancel-friend-request' data-id='".$to."'>Cancel Friend Request</button>";
        $unfriend="                   <button class='black-button mr-2 remove-friend' data-id='".$to."'>Unfriend</button>";
        $addAsConnection="            <button class='black-button mr-2 sent-request' id='add-as-connection' data-to='".$to."'>Add as Connection</button>";
        $cancelConnectionRequest='    <button class="black-button mr-2 cancel-connection-request" data-id="'.$to.'">Cancel Connection Request</button>';
        $confirmConnectionRequest='   <button class="black-button mr-2 connection-request-sent approve" data-id="'.$to.'">Confirm Connection Request</button>';
        $rejectConnectionRequest='    <button class="black-button mr-2 connection-request-sent decline" data-id="'.$to.'">Delete Connection Request</button>';
        $unConnection="               <button class='black-button mr-2 remove-connection' data-id='".$to."'>Remove From Connection</button>";

        $data='';
        if (receivedAnyPendingRequest($to)){
            if (receivedFriendRequest($to)){
                $data.=$confirmFriendRequest;
                $data.=$rejectFriendRequest;
            }
            if (receivedConnectionRequest($to)){
                $data.=$confirmConnectionRequest;
                $data.=$rejectConnectionRequest;
            }
        }
        elseif (receivedAnyApprovedRequest($to)){
            if(checkApprovedRequest($to)=='connections'){
                $data.=$unConnection;
            }else{
                $data.=$unfriend;
            }
            $data.=$sendMessage;

        }
        else{
            if (friendRequestSent($to)){
                $data.=$cancelFriendRequest;
            }elseif(connectionRequestSent($to)){
                $data.=$cancelConnectionRequest;
            }
            else{
                $data.=$addAsFriend;
                $data.=$addAsConnection;
            }
        }
        return response()->json($data);
    }
}

<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Pusher\Pusher;

class ChatController extends Controller
{
    public function index(Request $request){
        $receiver=null;
        if ($request['receiver']){
            $receiver=$request['receiver'];
        }
        $user=auth()->user();
        return view('ambassador.chat',compact('user','receiver'));
    }
    public function fetch_users(Request $request)
    {
        $role_slug=Role::where('slug','ambassador')->first();
        $role_slug=$role_slug->id;
        if ($request->search){
            $key=$request->search;
            $data=User::where('id','!=',auth()->user()->id)->where('role',$role_slug)
                ->whereRaw('( fname LIKE "%'.$key.'%" or lname LIKE "%'.$key.'%" or concat(fname," ",lname) LIKE "%'.$key.'%" )')->get();
        }else{
            $data=User::where('id','!=',auth()->user()->id)->where('role',$role_slug)->get();
        }
        $users=[];
        foreach ($data as $datum){
            $users[]=[
                'id'=>$datum->id,
                'name'=>$datum->fname.' '.$datum->lname,
                'src'=>$datum->profile_image(),
                'unread'=>$datum->unread_messages($datum->id)?$datum->unread_messages($datum->id):''
            ];
        }

        return response()->json($users);
        //
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'to'=>'required',
        ]);
        if (!$request->message && !$request->file){
            $this->validate($request,[
                'message'=>'required',
            ]);
        }
        $chat = new Chat();
        $chat->message=$request->message;
        $chat->to=$request->to;
        $chat->from=auth()->user()->id;
        $file=null;
        if ($request->file){
            $attachment = time() . $request->file->getClientOriginalName();
            Storage::disk('local')->put('/public/chat/'.auth()->user()->id.'/' . $attachment, File::get($request->file));
            $chat->file=$attachment;
            $file=Storage::disk('local')->url('/chat/'.auth()->user()->id.'/'.$attachment);

        }
        $chat->save();
        $time=$chat->created_at->format('h:i A');


        if ($chat->from == auth()->user()->id){
            $align='sent';
            $profile=$chat->sender->profile_image();
        }else{
            $align='received';
            $profile=$chat->sender->profile_image();
        }
        $name=$chat->sender->fullName();
        $singleMessageBody='                                                <div class="single-message '.$align.'">
                                                    <div class="single-message-profile">
                                                        <div class="single-message-image">
                                                            <img src="'.$profile.'" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="single-chat-message-inner">
                                                        <div class="single-message-chat-inner">
                                                            <div class="single-chat-message-username">'.$name.'</div>
                                                            <div class="single-chat-message-text-inner">
                                                                <div class="single-chat-message-text">'.$chat->message.'</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-chat-message-attachment-time">
                                                        <div class="single-chat-message-attachment-time-inner">
                                                            ';
        if ($chat->file){
            $singleMessageBody.='<div class="single-chat-message-attachment open-file" data-url="'.Storage::disk('local')->url('/chat/'.$chat->from.'/'.$chat->file).'">
                                                                <div class="single-chat-message-attachment-image">
                                                                    <img src="'.url('ambassador_assets/images/icons/image-default.png').'" alt="">
                                                                </div>
                                                                <div class="single-chat-message-attachment-download">
                                                                    <a href=\'javascript:void(0)\'>Download</a>
                                                                </div>
                                                            </div>
                                                            ';
        }
        $singleMessageBody.='
                                                            <div class="single-chat-message-time">
                                                                '.$chat->created_at->format('h:i A').'
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>
';



        $options = array(
            'cluster' => 'ap2',
            'encrypted' => true
        );
        $pusher = new Pusher(
            Env::get('PUSHER_APP_KEY'),
            Env::get('PUSHER_APP_SECRET'),
            Env::get('PUSHER_APP_ID'), $options
        );
        $pusher->trigger('channel-chat', 'App\Events\Chat', ['chat'=>$chat,'html'=>str_replace('single-message sent','single-message received',$singleMessageBody)]);
        return response()->json(['html'=>$singleMessageBody,'remove_file'=>$chat->file?true:false]);
    }
    public function fetch(Request $request)
    {
        $chat=Chat::where('to',$request->user)->where('from',auth()->user()->id)->orwhere('from',$request->user)->where('to',auth()->user()->id)->get();
        $messages=[];
        $dates=[];
        foreach ($chat as $item) {
            $item->read_at=date('Y-m-d H:i:s');
            $item->save();
            $singleMessageBody=getMessageHtml($item);
            $messages[]=[
                'date'=>$item->created_at->format('M d, Y'),
                'body'=>$singleMessageBody,
            ];
            $dates[]=$item->created_at->format('M d, Y');
        }
        $dates=array_values(array_unique($dates));
        $data=[];
        foreach ($dates as $date){
            $data[$date]=[];
            foreach ($messages as $k=>$message){
                if ($message['date']==$date){
                    $data[$date][]=$message;
                }
            }
        }
        return response()->json($data);
    }
    public function edit(Chat $chat)
    {
        //
    }
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }
    public function mark_as_read(Request $request)
    {
        $chat=Chat::find($request->id);
        $chat->read_at=date('Y-m-d H:i:s');
        $chat->save();
        return true;
        //
    }


    //
}

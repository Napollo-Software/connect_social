<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Connection;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index($type,$id=null){
        if ($id){ $user=User::find($id); }else{ $id=auth()->user()->id; $user=User::find($id); }
        return view('ambassador.profile.network',compact('type','user'));
    }
    public function fetch(Request $request){
        $type=$request->type;
        $id=$request->user;
        $data=null;
        $html='';
        if ($type=='friend'){
            $data=Friend::where('from',$id)->where('status',\Friends::STATUS_APPROVED)->orwhere('to',$id)->where('status',\Friends::STATUS_APPROVED)->get();
        }
        if ($type=='connection'){
            $data=Connection::where('from',$id)->where('status',\Connections::STATUS_APPROVED)->orwhere('to',$id)->where('status',\Connections::STATUS_APPROVED)->get();
        }
        if ($type=='tier-1'){
            $data=auth()->user()->tier_1;
        }
        if ($type=='tier-2'){
            $data=auth()->user()->tier_2();
        }

        foreach ($data as $friend){
            if ($type=='friend'){
                $detail=getFriendDetails($friend);
            }
            if ($type=='connection'){
                $detail=getConnectionDetails($friend);
            }
            if ($type=='tier-1'){
                $detail=$friend->referred_to_details;
            }
            if ($type=='tier-2'){
                $detail=$friend;
            }
            $html.='<div class="friend-grid-col">
                            <div class="friend-grid-col-inner-div">
                                <div class="friend-grid-col-profile">
                                    <div class="friend-grid-col-profile-inner">
                                        <div class="friend-grid-col-profile-image">
                                            <img src="'.$detail->profile_image().'" alt="">
                                        </div>
                                        <div class="friend-grid-col-profile-text">
                                            <div class="friend-grid-col-profile-text-top">
                                                <a href="'.url('profile-view/'.$detail->id).'" class="text-decoration-none text-secondary">'.$detail->fullName().'</a>
                                            </div>
                                            <div class="friend-grid-col-profile-text-bottom">
                                                '.ucfirst($type).'
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="friend-grid-col-options">
                                    <div class="friend-grid-col-options-inner">
                                        <div class="friend-grid-col-options-icon">
                                            <span class="ti-more-alt"></span>
                                            <div class="friend-grid-col-options-dropdown" data-id="'.$detail->id.'">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
';
        }

        return response()->json($html);

    }
}

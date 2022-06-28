<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index(Request $request){
        $this->validate($request,[
            'key'=>'required'
        ]);
        $key=$request->key;
        $role_slug=Role::where('slug','ambassador')->first();
        $role_slug=$role_slug->id;
        $results=User::where('id','!=',auth()->user()->id)->where('role',$role_slug)->whereRaw('( fname LIKE "%'.$key.'%" or lname LIKE "%'.$key.'%" )')->get();
        $friends_data=getFriendsList(auth()->user()->id);
        $conenctions_data=getConnectionsList(auth()->user()->id);
        $connections=[];
        foreach ($conenctions_data as $conenctions_datum){
            $connections[]=getConnectionDetails($conenctions_datum)['id'];
        }
        $friends=[];
        foreach ($friends_data as $friends_datum){
            $friends[]=getFriendDetails($friends_datum)['id'];
        }
        return view('ambassador.home.search',compact('results','key','friends','connections'));
    }
}

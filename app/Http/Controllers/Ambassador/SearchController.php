<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request){
        $this->validate($request,[
            'key'=>'required'
        ]);
        $key=$request->key;
        return view('ambassador.search.index',compact('key'));
    }
    public function fetch(Request $request){
        $key=$request->key;
        $role_slug=Role::where('slug','ambassador')->first();
        $role_slug=$role_slug->id;

        $results=User::where('id','!=',auth()->user()->id)->where('role',$role_slug)
            ->whereRaw('( fname LIKE "%'.$key.'%" or lname LIKE "%'.$key.'%" or concat(fname," ",lname) LIKE "%'.$key.'%" )')->get();

        $friends=getArrayFromKeyofEloquent(getFriendsListUsers(auth()->user()->id),'id');
        $connections=getArrayFromKeyofEloquent(getConnectionsListUsers(auth()->user()->id),'id');

        $viewRender = view('ambassador.search.components.search_html',compact('results','friends','connections'))->render();

        return response()->json($viewRender);
    }
}

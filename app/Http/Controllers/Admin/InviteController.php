<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    //
    public function index(){
        return view('admin.invite');
    }
    public function send(Request $request){
        dd($request->all());
    }

}

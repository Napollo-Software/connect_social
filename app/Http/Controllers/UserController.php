<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Nexmo;

class UserController extends Controller
{
    public function create(){
        return view ('backend.user.create');

    }

    public function store(Request $request) {
        $code = rand(1111, 9999);

        // $users = $user;
        // $user->phone = $request->phone;
        // $user->code = $code;
        // $user->save();

        $nexmo = app('Nexmo\Client');

        return redirect ('/verify');

    }

    public function Getverify(){
        return view('backend.user.verify');
    }

    public function Postverify(){
        return view('backend.user.verify');
    }
}

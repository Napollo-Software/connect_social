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
        $nexmo->message()->send([
            'to'   => '+923040647306',
            'from' => '16105552344',
            'text' => 'Enter 9900 to verify your phone number.'
        ]);
        return redirect ('/verify');
        
    }

    public function Getverify(){
        return view('backend.user.verify');
    }

    public function Postverify(){
        return view('backend.user.verify');
    }
}

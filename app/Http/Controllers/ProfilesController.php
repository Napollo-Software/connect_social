<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($id){
        $user = User::find($id);
        return view('profile', [
            'user' => $user
        ]);
    }
}

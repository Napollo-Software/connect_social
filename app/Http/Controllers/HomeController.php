<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($type=null)
    {
        /*$class = new \ReflectionClass('Privacy');
        foreach (User::where('role',3)->get() as $user){
            foreach ($class->getConstants() as $constant){
                $sql="INSERT INTO `posts` ( `user_id`, `details`, `privacy`, `deleted_at`, `created_at`, `updated_at`) VALUES
            ( ".$user->id.", 'Testing post from ".$user->fullName()." (".$user->email.") with privacy of ".$constant."', '".$constant."', NULL, '2022-07-0".rand(1,9)." 10:12:10', '2022-07-01 10:12:10');";
                echo '<br>'.$sql;
            }
        }
        dd(1);*/
        if (Auth::user()->roles->slug == 'ambassador') {
            $user = auth()->user();
            return view('ambassador.home.index', compact( 'user'));
        }
        return view('admin.dashboard');
    }

}

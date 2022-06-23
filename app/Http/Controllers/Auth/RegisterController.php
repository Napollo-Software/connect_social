<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AmbassadorDetails;
use App\Models\Referral;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Nexmo;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:30'],
            'country_code' => ['required', 'max:30'],
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string','unique:users', 'max:255','regex:/(^[a-zA-Z]+[a-zA-Z0-9\\-]*$)/u'],
            'gender' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8','confirmed'],
            'profile' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $mobilecode=rand(100000,999999);
        $emailcode=rand(100000,999999);
        $message='<h6>Email Verification:</h6>
Dear '.$data['fname'].' '.$data['lname'].',<br>
Congrats! You are one step away to be our part!<br>
You need to verify your email address to activate your account. Please use the following 5-digit One Time Password (OTP) to complete your sign-up procedure. <br>
'.$emailcode.'<br>
Do not provide this code to anyone else to keep your important data confidential. If you are receiving this email without registering, contact us.<br>
For any help, seek our assistance at abcdef@gmail.com.<br>
With Best Regards,<br>
Connect Social';



        /*$nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
            'to'   => '+923040647306',
            'from' => '16105552344',
            'text' => 'Make Everything Special With Connect Social,<br>
To get started with us, you need to verify your phone number. Please use the following 4-digit OTP to confirm your phone number and complete your registration. <br>
'.$mobilecode.'
To avoid inconvenience and secure your data, do not share this OTP with anyone else. If you did not register with us, contact us at abcdef@gmail.com at your earliest. <br>
Best Wishes<br>
Connect Social'
        ]);*/


        $attachment = time() . $data['profile']->getClientOriginalName();
        Storage::disk('local')->put('/public/profile/' . $attachment, File::get($data['profile']));
        sendEmail($data['email'],'connectsocial@napollo.net','Almost There! Confirm Your Email',$message);

        $user=User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'role' => $data['role'],
            'email' => $data['email'],
            'country_code' =>$data['country_code'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'email_code'=>$emailcode,
            'phone_code'=>$mobilecode,
            'profile'=>$attachment,
        ]);
        $role=Role::find($data['role']);
        if ($role->slug=='ambassador'){
            $details=new AmbassadorDetails();
        }
        if ($role->slug=='merchant'){
            //TODO: Pending till merchant details model is available
        }
        $details->user_id=$user->id;
        $details->save();
        $referrer=User::find($data['referred_by']);
        if ($referrer){
            if ($referrer->roles->slug=='ambassador' || $referrer->roles->slug=='merchant'){
                $referral = new Referral();
                $referral->referred_by=$data['referred_by'];
                $referral->referred_to=$user->id;
                $referral->save();
            }
        }

        return $user;
    }
}

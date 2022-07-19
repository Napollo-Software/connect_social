<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\ChartOfAccount;
use App\Http\Traits\Transaction;
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

    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }
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
        ],[
            'fname.required'=>'First name is required.',
            'lname.required'=>'Last name is required.',
            'country_code.required'=>'Country code is required.',
            'profile.required'=>'Profile picture is required.',
        ]);
    }

    use ChartOfAccount;
    use Transaction;
    protected function create(array $data)
    {
        //Step 1 : Insert data in User
        //Step 2 : Send verification email
        //Step 3 : Create ambassador/merchant details
        //Step 4 : Create referral table data
        //Step 5 : Create COA of ambassador/merchant
        //Step 6 : Award with joining reward
        //Step 7 : Award to parent tier 1 and parent tier 2


        $emailcode=rand(100000,999999);
        $full_name=$data['fname'].' '.$data['lname'];
        $referrer=User::find($data['referred_by']);
        $attachment = time() . $data['profile']->getClientOriginalName();

        $message="Dear {$full_name},<br><br>Congrats! You are one step away from joining our community! You need to verify your email address to activate your account. Please use the following 6-digit One Time Password (OTP) to complete your sign-up procedure. <br><br>{$emailcode}<br><br>Please do not provide this code to anyone else to keep your important data confidential. If you are receiving this email without registering on our platform, please contact us.<br><br>For any further help, you can email us at abcdef@gmail.com.<br><br>With Best Regards,<br>Connect Social Team";

        $user=new User();
        $user->fname=$data['fname'];
        $user->lname=$data['lname'];
        $user->role=$data['role'];
        $user->email=$data['email'];
        $user->country_code=$data['country_code'];
        $user->phone=$data['phone'];
        $user->gender=$data['gender'];
        $user->username=$data['username'];
        $user->password=Hash::make($data['password']);
        $user->email_code=$emailcode;
        $user->profile=$attachment;


        sendEmail($data['email'],'connectsocial@napollo.net','Almost There! Confirm Your Email',$message);
        Storage::disk('local')->put('/public/profile/'.$data['email'].'/' . $attachment, File::get($data['profile']));

        $role=Role::find($data['role']);

        if ($role->slug=='ambassador'){
            $details=new AmbassadorDetails();
        }
        if ($role->slug=='merchant'){
            //TODO: Pending till merchant details model is available
        }

        $user->save();

        if ($role->slug == 'ambassador' || $role->slug == 'merchant'){
            $coa=$this->coa_create($full_name,$role->slug);
            $user->coa=$coa->id;
            $user->save();
        }


        $details->user_id=$user->id;
        $details->save();

        if ($referrer){
            if ($referrer->roles->slug=='ambassador' || $referrer->roles->slug=='merchant'){
                $referral = new Referral();
                $referral->referred_by=$data['referred_by'];
                $referral->referred_to=$user->id;
                $referral->save();
            }
        }


        $connectSocialAccount=ConnectSocialCOA();
        $joiningBonus=100;
        $this->transaction('Joining Bonus','Joining Bonus on joining Connect Social',
            array(
                array('account'=>$connectSocialAccount->id,'dr'=>null,'cr'=>$joiningBonus),
                array('account'=>$user->coa,'dr'=>$joiningBonus,'cr'=>null)
            )
        );

 

        if ($referrer) {
            if ($referrer->roles->slug == 'ambassador' || $referrer->roles->slug == 'merchant') {

                $tier1reward=50;
                $tier2reward=50;

                $parentTier1=$user->tier_0();
                $parentTier2=$user->tier_00();


                if ($parentTier1){
                    $this->transaction('Tier 1 Reward','Tier 1 Reward from joining of '.$full_name.'['.$user->email.']',
                        array(
                            array('account'=>$connectSocialAccount->id,'dr'=>null,'cr'=>$tier1reward),
                            array('account'=>$parentTier1->coa,'dr'=>$tier1reward,'cr'=>null)
                        )
                    );
                }
                if ($parentTier2){
                    $this->transaction('Tier 2 Reward','Tier 2 Reward from joining of '.$full_name.'['.$user->email.']',
                        array(
                            array('account'=>$connectSocialAccount->id,'dr'=>null,'cr'=>$tier2reward),
                            array('account'=>$parentTier2->coa,'dr'=>$tier2reward,'cr'=>null)
                        )
                    );
                }
            }
        }



        return $user;
    }
}

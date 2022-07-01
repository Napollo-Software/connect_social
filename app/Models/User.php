<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use phpDocumentor\Reflection\Types\Void_;
use function Symfony\Component\Translation\t;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function roles(){
        return $this->belongsTo(Role::class,'role')->withDefault();
    }
    protected $fillable = [
        'fname',
        'lname',
        'role',
        'phone',
        'gender',
        'username',
        'country_code',
        'email',
        'password',
        'email_code',
        'phone_code',
        'profile',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function fullName(){
        return $this->fname.' '.$this->lname;
    }
    public function details(){
        if ($this->roles->slug=='ambassador'){
            return $this->belongsTo(AmbassadorDetails::class,'id','user_id')->withDefault();
        }
    }
    public function profile_image(){
        if($this->profile){
            return Storage::disk('local')->url('/profile/'.$this->email.'/'.$this->profile);
        }
        return url('admin_assets//images/avatars/avatar-2.png');
    }
    public function unread_messages($id){
        $results=Chat::where('from',$id)->where('to',auth()->user()->id)->whereNull('read_at')->get()->count();
        if ($results>0){
            return $results;
        }
        return false;
    }
    public function invite(){
        $explode=explode('@',$this->email);
        $username=$explode[0];
        return url('referral-link/join-as/'.$username.'/'.$this->id);
    }
    public function tier1(){
        return $this->hasMany(Referral::class,'referred_by');
    }
    public function tier_1(){
        $tier_1=[];
        foreach ($this->tier1 as $item){
            $tier_1[]=$item->referred_to;
        }
        return User::whereIn('id',$tier_1)->get();
    }
    public function tier_2(){
        $tier_2=[];
        foreach ($this->tier_1() as $tier_1){
            foreach ($tier_1->tier_1() as $user){
                $tier_2[]=$user->id;
            }
        }
        return User::whereIn('id',$tier_2)->get();
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Referral extends Model
{
    use HasFactory;
    protected $fillable = [
          'referred_by', 'referred_to',
    ];
    public function referred_to_details(){
        return $this->belongsTo(User::class,'referred_to')->withDefault();
    } 
}

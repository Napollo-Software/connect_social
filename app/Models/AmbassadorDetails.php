<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AmbassadorDetails extends Model
{
    use HasFactory;
    public function coverPhoto(){
        if ($this->cover_photo){
            if(!File::exists(public_path().'/storage/a/covers/'.$this->user_id.'/'.$this->cover_photo)){
                return url('ambassador_assets/images/cover/cover-bg.svg');
            }
             return Storage::disk('local')->url('a/covers/'.$this->user_id.'/'.$this->cover_photo);
        }
        return url('ambassador_assets/images/cover/cover-bg.svg');
    }

    public function IdCard1Photo(){
        if($this->id_card_1){
            if(!File::exists(public_path().'/storage/cnic_pics/'.$this->id_card_1)){
                return null;
            }
            return Storage::disk('local')->url('/cnic_pics/'.$this->id_card_1);
        }
        return null;
    }
    public function IdCard2Photo(){
        if($this->id_card_2){
            if(!File::exists(public_path().'/storage/cnic_pics/'.$this->id_card_2)){
                return null;
            }
            return Storage::disk('local')->url('/cnic_pics/'.$this->id_card_2);
        }
        return null;
    }
    public function Passport1Image(){
        if($this->passport_1){
            if(!File::exists(public_path().'/storage/passport/'.$this->passport_1)){
                return null;
            }
            return Storage::disk('local')->url('/passport/'.$this->passport_1);
        }
        return null;
    }
    public function Passport2Image(){
        if($this->passport_2){
            if(!File::exists(public_path().'/storage/passport/'.$this->passport_2)){
                return null;
            }
            return Storage::disk('local')->url('/passport/'.$this->passport_2);
        }
        return null;
    }
    
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}

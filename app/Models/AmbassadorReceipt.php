<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmbassadorReceipt extends Model
{
    use HasFactory;
    public function ambassador(){
        return $this->belongsTo(User::class,'ambassador_id');
    }
    public function merchant_type(){
        return ucfirst(str_replace('_',' ',$this->merchant_type));
    }

}

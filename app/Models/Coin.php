<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;
    protected $table="coin";
    public static function CurrentValue(){
        $latest=Coin::orderBy('created_at', 'desc')->first();
        return $latest?$latest->dollar:0;
    }
    public static function differenceFromCurrent(){
        $secondLast=Coin::orderBy('created_at', 'desc')->skip(1)->first();
        if ($secondLast){
            $difference=self::CurrentValue()-$secondLast->dollar;
            return $difference;
        }
        return 0;
    }
    public static function balanceOfCurrentUser(){
        $my_trxs=JournalDetails::where('account',auth()->user()->coa)->get();
        $balance=0;
        foreach ($my_trxs as $my_trx) {
            if ($my_trx->dr){
                $balance+=$my_trx->dr;
            }else{
                $balance-=$my_trx->dr;
            }
        }
        return $balance;
    }
}

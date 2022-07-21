<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;
    protected $table="coin";
    public static function CurrentValue(){
        $latest=Coin::latest()->first();
        return $latest?$latest->dollar:0;
    }
}

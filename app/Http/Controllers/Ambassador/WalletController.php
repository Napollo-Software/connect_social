<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Http\Traits\Transaction;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    //
    use Transaction;
    public function index(){
        return view('ambassador.wallet.earnings.index');
    }
}

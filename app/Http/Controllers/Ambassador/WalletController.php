<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Http\Traits\Transaction;
use App\Models\Coin;
use App\Models\Journal;
use App\Models\JournalDetails;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    //
    use Transaction;
    public function dashboard(){
        if (auth()->user()->details->kyc_status!=\KYC::STATUS_APPROVED){
            return redirect()->route('home')->with('message','Please complete your KYC to access wallet!');
        }
        $my_trxs=JournalDetails::where('account',auth()->user()->coa)->get();
        $coins = Coin::all();
        return view('ambassador.wallet.dashboard.wallet',compact('my_trxs','coins'));
    }
}

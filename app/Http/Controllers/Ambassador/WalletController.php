<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Http\Traits\Transaction;
use App\Models\Journal;
use App\Models\JournalDetails;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    //
    use Transaction;
    public function index(){
        $tier1Earnings=0;
        $tier2Earnings=0;

        $my_trxs=JournalDetails::where('account',auth()->user()->coa)->get();


        foreach (JournalDetails::where('account',auth()->user()->coa)->get() as $detail){
            if ($detail->journal->type=='Tier 1 Reward' && isset($detail->dr)){
                $tier1Earnings+=$detail->dr;
            }
        }
        foreach (JournalDetails::where('account',auth()->user()->coa)->get() as $detail){
            if ($detail->journal->type=='Tier 2 Reward' && isset($detail->dr)){
                $tier2Earnings+=$detail->dr;
            }
        }

        return view('ambassador.wallet.earnings.index',compact('my_trxs','tier1Earnings','tier2Earnings'));
    }
}

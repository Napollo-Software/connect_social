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

        $tier_1=getArrayFromKeyofEloquent(auth()->user()->tier_1(),'coa');
        foreach (JournalDetails::whereIn('account',$tier_1)->get() as $detail){
            if ($detail->journal->type=='Tier 1 Reward' && isset($detail->dr)){
                $tier1Earnings+=$detail->dr;
            }
        }

        $tier_2=getArrayFromKeyofEloquent(auth()->user()->tier_2(),'coa');
        foreach (JournalDetails::whereIn('account',$tier_2)->get() as $detail){
            if ($detail->journal->type=='Tier 2 Reward' && isset($detail->dr)){
                $tier2Earnings+=$detail->dr;
            }
        }


        return view('ambassador.wallet.earnings.index',compact('my_trxs','tier1Earnings','tier2Earnings'));
    }
}

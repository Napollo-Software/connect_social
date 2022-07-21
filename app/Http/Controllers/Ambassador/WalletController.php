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
    public function dashboard(){
        return view('ambassador.wallet.dashboard.wallet');

    }
}

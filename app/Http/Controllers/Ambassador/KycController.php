<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KycController extends Controller
{
    public function submission(){
        return view('ambassador.kyc.submission');
    }
}

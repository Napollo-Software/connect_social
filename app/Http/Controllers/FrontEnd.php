<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreditCardRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LVR\CreditCard\CardCvc;
use LVR\CreditCard\CardNumber;
use LVR\CreditCard\CardExpirationYear;
use LVR\CreditCard\CardExpirationMonth;

class FrontEnd extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function under_construction()
    {
        $data['title'] = 'Under Construction';
        return view('default.construction');
    }

    public function kyc_submit()
    {
        return view('kyc.form.index');
    }

    public function kyc_response()
    {
        return view('kyc.response.index');
    }

    public function wallet_earning()
    {
        return view('ambassador.wallet.earnings.index');
    }

    public function wallet_dashboard()
    {
        return view('ambassador.wallet.dashboard.transaction');
    }

    public function add_card()
    {
        return view('ambassador.wallet.dashboard.add-card');
    }
    public function orderPost(CreditCardRequest $request){

        return response()->json($request->all());
    }
}
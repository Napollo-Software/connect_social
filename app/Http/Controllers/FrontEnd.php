<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function submit_form(Request $request)
    {
        print_r($request->all());
        die;
    }

    public function add_card()
    {
        return view('ambassador.wallet.dashboard.add-card');
    }

    public function packages()
    {
        return view('ambassador.wallet.dashboard.coin-package');
    }
    
    public function orderPost(Request $request)
    {
        $user = auth()->user();
        $input = $request->all();
        $token =  $request->stripeToken;
        $paymentMethod = $request->paymentMethod;
        try {

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            if (is_null($user->stripe_id)) {
                $stripeCustomer = $user->createAsStripeCustomer();
            }

            \Stripe\Customer::createSource(
                $user->stripe_id,
                ['source' => $token]
            );

            $user->newSubscription('test',$input['plane'])
                ->create($paymentMethod, [
                    'email' => $user->email,
                ]);

            return back()->with('success','Subscription is completed.');
        } catch (Exception $e) {
            return back()->with('success',$e->getMessage());
        }

    }
}
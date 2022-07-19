<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\AmbassadorReceipt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ReceiptController extends Controller
{
    //
    public function index(){
        $merchants=User::all();
        $receipts=AmbassadorReceipt::where('ambassador_id',auth()->user()->id)->get();
        return view('ambassador.receipt.index',compact('merchants','receipts'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'merchant_type'=>'required',
            'connect_merchant'=>'required_if:merchant_type,connect',
            'merchant_name'=>'required_if:merchant_type,non_connect',
            'receipt_amount'=>'required',
            'attachment'=>'required',
        ]);
        $receipt=new AmbassadorReceipt();
        $receipt->ambassador_id=auth()->user()->id;
        if ($request->merchant_type == 'connect'){
            $merchant=User::find($request->connect_merchant);
            $receipt->merchant_name=$merchant->fullName();
            $receipt->merchant_id=$request->connect_merchant;

        }else{
            $receipt->merchant_name=$request->merchant_name;
        }
        $receipt->merchant_type=$request->merchant_type;
        $receipt->receipt=$request->receipt;
        $receipt->receipt_amount=$request->receipt_amount;
        $receipt->reward_amount=$request->reward_amount;


        $attachment = time() . $request['attachment']->getClientOriginalName();
        Storage::disk('local')->put('/public/ambassador-receipts/' . $attachment, File::get($request['attachment']));
        $receipt->receipt = $attachment;

        $receipt->save();
        return response()->json(['success'=>'Receipt added successfully!']);
    }
}

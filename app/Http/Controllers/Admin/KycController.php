<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AmbassadorDetails;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KycController extends Controller
{
    //
    public function index(){
        return view('admin.kyc.index');
    }
    public function fetch(Request $request){
        $data = AmbassadorDetails::whereNotNull('kyc_status')->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('name', function ($data) {
                return $data->user->fname;
            })
            ->addColumn('email', function ($data) {
                return $data->user->email;
            })
            ->addColumn('status', function ($data) {
                if ($data->kyc_status==\KYC::STATUS_REQUESTED){
                    return '<span class="btn btn-sm py-0 btn-info">Pending for Approval</span>';
                }
                if ($data->kyc_status==\KYC::STATUS_APPROVED){
                    return '<span class="btn btn-sm py-0 btn-success">Approved</span>';
                }
                if ($data->kyc_status==\KYC::STATUS_REJECTED){
                    return '<span class="btn btn-sm py-0 btn-warning">Rejected</span>';
                }
            })

            ->addColumn('action', function($v){
                $actions =
                    '<a href="'.route('kyc.show',[$v->id]).'" class="btn p-0"><i class="bx bx-show"></i></a>';
                return $actions;
            })
            ->rawColumns(['status','action'])
            ->make(true);
    }
    public function show($id){
        $show=AmbassadorDetails::find($id);
        return view('admin.kyc.show',compact('show'));
    }
    public function action(Request $request){
        $action=AmbassadorDetails::find($request->id);
        $action->kyc_status=$request->status;
        $action->kyc_reject_reason=$request->reason;
        $action->save();
        if ($request->status==1){
            $response='KYC request is approved successfully!';
        }
        if ($request->status==2){
            $response='KYC request is rejected successfully!';
        }
        return response()->json(['success'=>$response]);
    }
}

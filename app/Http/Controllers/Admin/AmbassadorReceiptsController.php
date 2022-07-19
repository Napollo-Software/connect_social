<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AmbassadorReceipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class AmbassadorReceiptsController extends Controller
{
    //
    public function index(){
        return view('admin.ambassador_receipts.index');
    }
    public function action(Request $request){
        $data=$request->id;
        $id=$data['id'];
        $type=$data['type'];
        $receipt=AmbassadorReceipt::find($id);
        if ($receipt->status==\AMBASSADOR_RECEIPT::STATUS_REQUESTED){
            if ($type=='approve'){
                $receipt->status=\AMBASSADOR_RECEIPT::STATUS_APPROVED;
            }
            if ($type=='reject'){
                $receipt->status=\AMBASSADOR_RECEIPT::STATUS_REJECTED;
            }
            $receipt->save();
        }
        return response()->json(['success'=>'Ambassador receipt is '.$type.'d successfully!']);
    }



    public function fetch(Request $request){
        $data = AmbassadorReceipt::all();
        return DataTables::of($data)
            ->addIndexColumn()

            ->addColumn('ambassador', function($v){
                return $v->ambassador->fullName();
            })
            ->addColumn('merchant_type', function($v){
                return $v->merchant_type();
            })
            ->addColumn('date', function($v){
                return $v->created_at->format('d-m-Y');
            })

            ->addColumn('attachment', function($v){
                return '<a class="text-decoration-none text-dark" href="'.Storage::disk('local')->url('/ambassador-receipts/'.$v->receipt).'" target="_blank"><span class="bx bx-paperclip"></span></a>';
            })

            ->addColumn('action', function($v){
                if ($v->status==\AMBASSADOR_RECEIPT::STATUS_REQUESTED){
                    $actions =
                        '<a href class="btn p-0 action" data-type="approve" data-id="'.$v->id.'"><i class="bx bx-check"></i></a>
                    <a href class="btn p-0 action" data-type="reject" data-id="'.$v->id.'"><i class="bx bx-x"></i></a>';
                }else{
                    $actions='';
                }
                return $actions;
            })
            ->addColumn('status', function($v){
                $status=null;
                if ($v->status==\AMBASSADOR_RECEIPT::STATUS_REQUESTED){
                    $status='<p class="text-warning">Requested</p>';
                }
                if ($v->status==\AMBASSADOR_RECEIPT::STATUS_APPROVED){
                    $status='<p class="text-success">Approved</p>';
                }
                if ($v->status==\AMBASSADOR_RECEIPT::STATUS_REJECTED){
                    $status='<p class="text-danger">Rejected</p>';
                }
                return $status;
            })


            ->rawColumns(['action','attachment','status'])
            ->make(true);
    }
}

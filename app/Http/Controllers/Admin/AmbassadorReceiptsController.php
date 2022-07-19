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
                $actions =
                    '<a href class="btn p-0 action" data-type="approve" data-id="'.$v->id.'"><i class="bx bx-check"></i></a>
                    <a href class="btn p-0 action" data-type="reject" data-id="'.$v->id.'"><i class="bx bx-x"></i></a>';
                return $actions;
            })
            ->addColumn('status', function($v){
                $status=null;
                if ($v->status==\AMBASSADOR_RECEIPT::STATUS_REQUESTED){
                    $status='Requested';
                }
                if ($v->status==\AMBASSADOR_RECEIPT::STATUS_APPROVED){
                    $status='Approved';
                }
                if ($v->status==\AMBASSADOR_RECEIPT::STATUS_REJECTED){
                    $status='Rejected';
                }
                return $status;
            })


            ->rawColumns(['action','attachment',])
            ->make(true);
    }
}

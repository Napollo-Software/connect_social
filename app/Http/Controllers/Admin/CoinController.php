<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coin;
use App\Models\Package;
use Yajra\DataTables\DataTables;

class CoinController extends Controller
{
    public function config(){
        return view('admin.coin.configuration');
    }

    public function storeConfig(Request $request)
    {
        $data = new Coin();
        $data->dollar = $request->dollar_value;
        $data->save();
        return response()->json(['success'=>'Configuration added successfully!']);

    }

    public function fetchConfig(Request $request)
    {
        $data = Coin::orderBy('created_at','DESC')->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('date', function ($v) {
                return $v->created_at->format('Y-m-d');
            })
            ->addColumn('time', function ($v) {
                return $v->created_at->format('h:i A');
            })
            ->addColumn('value', function ($v) {
                return '1 Coin = '.$v->dollar.'$';
            })

            ->make(true);
    }

    public function packages()
    {
        return view('admin.coin.packages');
    }

    public function storePackage(Request $request)
    {
        $data = new Package();
        $data->coin = $request->coin_value;
        $data->dollar = $request->dollar_value;
        $data->save();
        return response()->json(['success'=>'Package added successfully!']);
    }

    public function fetchPackage(Request $request)
    {
        $data = Package::orderBy('created_at','DESC')->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('date',function($v){
            return $v->created_at->format('y-m-d');
        })
        ->addColumn('time',function($v){
            return $v->created_at->format('h-i-s');
        })
        ->addColumn('action',function($v){
            $actions =
                    '<a href="#" class="btn p-0 edit" data-id="'.$v->id.'"><i class="bx bx-edit"></i></a>
                    <a href="#" class="btn p-0 delete" data-id="'.$v->id.'"><i class="bx bx-trash"></i></a>';
                return $actions;
        })
        ->make(true);
    }

    public function deletePackge(Request $request)
    {
        Package::find($request->id)->delete();
        return response()->json(['success'=>'Package deleted successfully!']);
    }

    public function editPackage(Request $request)
    {
        $data = Package::find($request->id)->get();
        return response()->json(['data'=>$data]);
    }
}

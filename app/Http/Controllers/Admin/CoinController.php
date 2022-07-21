<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coin;
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
        return response()->json('Added Successfully!');

    }

    public function fetchConfig(Request $request)
    {
        $data = Coin::all();
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
}

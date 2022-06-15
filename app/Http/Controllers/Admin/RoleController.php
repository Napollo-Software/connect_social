<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RoleController extends Controller
{
    //
    public function index(){
        return view('admin.roles.index');
    }
    public function fetch(Request $request){
        $data = Role::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
    public function store(Role){

    }
}

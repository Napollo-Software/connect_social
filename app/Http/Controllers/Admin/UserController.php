<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\AmbassadorDetails;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    //
    public function index(){
        return view('admin.users.index');
    }
    public function profile(){
        return view('admin.profile');
    }

    public function fetch(Request $request)
    {
        $data = User::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('role', function ($data) {
                return $data->roles->name;
            })
            ->addColumn('action',function($v){
                $actions =
                    '<a href="'.route('users.view',[$v->id]).'" class="btn p-0 pt-3"><i class="bx bx-show"></i></a>';
                return $actions;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function view($id)
    {
        $view=User::find($id);
        return view('admin.users.view',compact('view'));
    }
    public function update_profile(Request $request){
        $user=User::find(auth()->user()->id);
        if ($request->profile){
            $imageName = $request->profile->getClientOriginalName();
            $request->profile->move(public_path('admin_assets/images/profile'), $imageName);
            $user->profile=$imageName;
        }
        $user->save();
        return response()->json(['success'=>'Super admin data is updated successfully!']);
    }
}

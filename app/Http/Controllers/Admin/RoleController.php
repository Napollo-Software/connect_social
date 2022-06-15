<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RoleController extends Controller
{
    //
    public function index(){
        return view('admin.roles.index');
    }
    public function edit(Request $request){
        $edit=Role::find($request->id);
        return response()->json($edit);
    }
    public function destroy(Request $request){
        Role::find($request->id)->delete();
        return response()->json(['success'=>'Role deleted successfully!']);
    }

    public function fetch(Request $request){
        $data = Role::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($v){
                $actions =
                    '<a href="#" class="btn p-0 edit" data-id="'.$v->id.'"><i class="bx bx-edit"></i></a>
                    <a href="#" class="btn p-0 delete" data-id="'.$v->id.'"><i class="bx bx-trash"></i></a>';
                return $actions;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function submit(Request $request){
        $this->validate($request,[
           'name'=>'required|max:40|string'
        ]);
        $slugify = new Slugify();
        if ($request->id==0){
            $message='Role added successfully!';
            $role= new Role();
            $role->slug=$slugify->slugify($request->name);
        }else{
            $role= Role::find($request->id);
            $message='Role updated successfully!';
        }
        $role->name=$request->name;
        $role->save();
        return response()->json(['success'=>$message]);
    }
}

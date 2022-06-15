<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use Cocur\Slugify\Slugify;
use Yajra\DataTables\DataTables;

class PermissionController extends Controller
{
    public function index(){
        return view('admin.permission.index');
    }
    public function edit(Request $request){
        $edit=Permission::find($request->id);
        return response()->json($edit);
    }
    public function destroy(Request $request){
        Permission::find($request->id)->delete();
        return response()->json(['success'=>'Permission deleted successfully!']);
    }

    public function fetch(Request $request){
        $data = Permission::all();
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
            $message='Permission added successfully!';
            $permission= new Permission();
            $permission->slug=$slugify->slugify($request->name);
        }else{
            $permission= Permission::find($request->id);
            $message='Permission updated successfully!';
        }
        $permission->name=$request->name;
        $permission->save();
        return response()->json(['success'=>$message]);
    }
}

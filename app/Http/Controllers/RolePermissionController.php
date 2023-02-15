<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    
    public function storepermission(Request $request){
        $this->validate($request,[
            'name' =>'required'
        ]);
        
        $data=Permission::create([
            'name'=>$request->name
        ]);
        // return redirect('listdatarp');
        return redirect(dd($data));
    }

    public function updatepermission(Request $request, $id){
        $permission=Permission::find($id);
        $permission->name=$request->name;

        $permission->save();
        // return redirect('listdatarp');

        return redirect(dd($permission));
    }

    public function deletepermission($id){
        $permission=Permission::find($id);
        $permission->delete();

        return redirect('/listdatarp');
    }

    public function givePermission(Request $request,Role $role){
       

        if($role->hasPermissionTo($request->permission)){
            return back();
        }
        $role->givePermissionTo($request->permission);
            return redirect('/listdatarp');
    }
    public function revokePermission(Role $role,Permission $permission){
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return back();            
        }
        return redirect('/listdatarp');
    }   
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use YaroslavMolchan\Rbac\Models\Permission;
use YaroslavMolchan\Rbac\Models\Role;

class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addNewRole(Request $request){
        $userRole = Role::create([
            'name' => $request['role_name'],
            'slug' => strtolower($request['role_name'])
        ]);
        return $userRole;
    }

    public function getUserRoles(){
        $data = Role::all();
        return $data;
    }

    public function updateUserRoles(Request $request, $id){
        $update = Role::find($id)->update(['name'=> $request['role_name']]);
        return response()->json($update);
    }

    public function  deleteUserRoles($id){
        $delete  = Role::find($id)->delete();
        return response()->json($delete);
    }

    public function getUserPermissions(){
        $permissions = Permission::all();
        return $permissions;
    }

    public function addUserPermissions(Request $request){
        $permission = Permission::create([
            'name' =>$request['name'],
            'slug' =>strtolower($request['name'])
        ]);
        return $permission;
    }

    public function getUsers()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
}

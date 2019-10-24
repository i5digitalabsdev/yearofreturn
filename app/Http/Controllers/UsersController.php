<?php

namespace App\Http\Controllers;

use App\NewsCut;
use App\User;
use Illuminate\Http\Request;
use YaroslavMolchan\Rbac\Models\Permission;
use YaroslavMolchan\Rbac\Models\Role;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('getUserRole')->get();
        $roles = Role::all();
        return view('admin.users.index', compact('users','roles'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->detachRole($user);
        $delete = $user->delete();
        return response()->json($delete);
    }

    public function getRoles(){
        return view('admin.users.rolePermission.roles');
    }

    public function addNewUser(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
        $newUser = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role_id' => $request['role'],
            'password' => bcrypt($request['email']),
            'status' => 1
        ]);
        /* attach role  */
        $user = User::find($newUser->id);
        $user->attachRole($request->get('role'));
        if($user){
            $notification = array(
                'message' => 'User created successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Sorry an error occurred',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($notification);
        }
    }

    public function rolePermission()
    {
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        $users = User::all();
//        $superAdminPermission =
        return view('admin.users.rolePermission.roles', compact('roles','permissions','users'));
    }

    public function attachPermission(Request $request)
    {
        $role = $request->get('role');
        $adminRole = Role::find($role);
        foreach ($request->get('userPermission') as $permission){
            $adminRole->detachPermission($permission);
            $result = $adminRole->attachPermission($permission);
        }
        return $result;
    }

    public function getRolePermission($role_id)
    {
        $permission = Role::with('permissions')->where('id', $role_id)->get();
        return response()->json($permission);
    }


}

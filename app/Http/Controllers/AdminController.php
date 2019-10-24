<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Hash;

class AdminController extends Controller
{
    //handle admin login request


    public function getSettings()
    {
        $user = Auth::user();
        return view('admin.settings.index', compact('user'));
    }

    public function updateSettings(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $authenticatedUser = Auth::user();
        $updateUser = $authenticatedUser->update(['name'=>$request->get('name'),'email'=>$request->get('email')]);
        if($updateUser){
            return redirect()->back()->with('message','User updated successfully');
        } else {
            return redirect()->back()->withErrors('sorry an error occurred');
        }
    }

    public function  changePassword(Request $request){
        $user = Auth::user();
        $password = $user->password;
        $validation = Validator::make($request->all(),[
            'current_password' => 'hash:'.$password,
            'new_password' =>'required|confirmed|min:6|different:current_password'
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        $user->password = Hash::make($request->get('new_password'));
        $user->save();
        Auth::logout();
        return redirect('/login');
    }

}

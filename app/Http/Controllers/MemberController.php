<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $members = Member::all();
        foreach($members as $member){
            if($member->status){
                $member->status = '<span class="label label-success">Visible</span>';
            }
            if(!$member->status){
                $member->status = '<span class="label label-danger">Not visible</span>';
            }
        }
        return view('admin.team.index', compact('members'));
    }


    public function create()
    {
        return view('admin.team.create');
    }


    public function store(Request $request)
    {
        if(isset($request['status'])){
            $request['status'] = 1;
        }
        else{
            $request['status'] = 0;
        }
        $member = Member::create($request->all());
        if($member){
            return redirect('admin/team');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $member = Member::find($id);
        return view('admin.team.create', compact('member'));
    }


    public function update(Request $request, $id)
    {
        if(isset($request['status'])){
            $request['status'] = 1;
        }
        else{
            $request['status'] = 0;
        }
        $member = Member::find($id)->update($request->all());
        if($member){
            return redirect('admin/team/'.$id.'/edit');
        }
    }


    public function destroy($id)
    {
        $delete = Member::find($id)->delete();
        if($delete){
            return redirect('admin/team');
        }
    }

}

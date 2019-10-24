<?php

namespace App\Http\Controllers;

use App\Works;
use Illuminate\Http\Request;

class FeaturedWorksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $works = Works::all();
        foreach($works as $work){
            if($work->status){
                $work->status = '<span class="label label-success">Visible</span>';
            }
            if(!$work->status){
                $work->status = '<span class="label label-danger">Not visible</span>';
            }
        }
        return view('admin.works.index', compact('works'));
    }


    public function create()
    {
        return view('admin.works.create');
    }


    public function store(Request $request)
    {
        if(isset($request['status'])){
            $request['status'] = 1;
        }
        else{
            $request['status'] = 0;
        }
        $storeWork = Works::create($request->all());
        if($storeWork){
            return redirect('admin/works');
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $work = Works::find($id);
        return view('admin.works.create', compact('work'));

    }


    public function update(Request $request, $id)
    {
        if(isset($request['status'])){
            $request['status'] = 1;
        }
        else{
            $request['status'] = 0;
        }
        $work = Works::find($id)->update($request->all());
        if($work){
            return redirect('admin/works/'.$id.'/edit');
        }
    }


    public function destroy($id)
    {
        $delete = Works::find($id)->delete();
        if($delete){
            return redirect('admin/works');
        }
    }
}

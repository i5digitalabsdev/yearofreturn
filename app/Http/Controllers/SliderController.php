<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $banners = Banner::all();
        foreach($banners as $banner){
            if($banner->status){
                $banner->status = '<span class="label label-success">Visible</span>';
            }
            if(!$banner->status){
                $banner->status = '<span class="label label-danger">Not visible</span>';
            }
        }
        return view('admin.homeSlider.index', compact('banners'));
    }


    public function create()
    {
        return view('admin.homeSlider.create');
    }


    public function store(Request $request)
    {
        if(isset($request['status'])){
            $request['status'] = 1;
        }
        else{
            $request['status'] = 0;
        }
        $storeBanner = Banner::create($request->all());
        if($storeBanner){
            return redirect('admin/homeSlider');
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.homeSlider.create', compact('banner'));

    }


    public function update(Request $request, $id)
    {
        if(isset($request['status'])){
            $request['status'] = 1;
        }
        else{
            $request['status'] = 0;
        }
        $banner = Banner::find($id)->update($request->all());
        if($banner){
            return redirect('admin/homeSlider/'.$id.'/edit');
        }
    }


    public function destroy($id)
    {
        $delete = Banner::find($id)->delete();
        if($delete){
            return redirect('admin/homeSlider');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $events = Event::all();
        foreach($events as $event){
            if($event->status){
                $event->status = '<span class="label label-success">Visible</span>';
            }
            if(!$event->status){
                $event->status = '<span class="label label-danger">Not visible</span>';
            }
        }
        return view('admin.events.index', compact('events'));
    }


    public function create()
    {
        return view('admin.events.create');

    }


    public function store(Request $request)
    {
        if(isset($request['status'])){
            $request['status'] = 1;
        }
        else{
            $request['status'] = 0;
        }
        $storeEvent = Event::create($request->all());
        if($storeEvent){
            return redirect('admin/events');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin.events.create', compact('event'));
    }


    public function update(Request $request, $id)
    {
        if(isset($request['status'])){
            $request['status'] = 1;
        }
        else{
            $request['status'] = 0;
        }
        $event = Event::find($id)->update($request->all());
        if($event){
            return redirect('admin/events/'.$id.'/edit');
        }
    }


    public function destroy($id)
    {
        $delete = Event::find($id)->delete();
        if($delete){
            return redirect('admin/event');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Post;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menus = Menu::all();
        foreach($menus as $menu){
            if($menu->status){
                $menu->status = '<span class="label label-success">Visible</span>';
            }
            if(!$menu->status){
                $menu->status = '<span class="label label-danger">Not visible</span>';
            }
        }
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        $pages = Post::all();
        return view('admin.menu.create',compact('pages'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if(empty($data['url'])){
            $data['url'] = '#';
        }

        if(empty($data['sort'])){
            $data['sort'] = 10;
        }

        if(isset($data['status'])){
            $data['status'] = 1;
        }
        else{
            $data['status'] = 0;
        }
        $createMenu = Menu::create($data);
        if($createMenu){
            return redirect('admin/menu');
        }
    }

    public function edit($id)
    {
        $pages = Post::all();
        $menu = Menu::find($id);
        return view('admin.menu.create', compact('menu', 'pages'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $findMenu = Menu::find($id);
        if(empty($data['url'])){
            $data['url'] = '#';
        }

        if(empty($data['sort'])){
            $data['sort'] = 10;
        }
        if(isset( $data['status'] )){
            $data['status'] = 1;
        }
        else{
            $data['status'] = 0;
        }

        $update = $findMenu->update($data);

        if($update){
            return redirect('admin/menu');
        }
    }

    public function destroy($id)
    {
        $findMenu = Menu::find($id)->delete();
        if($findMenu){
            return redirect('admin/menu');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Post;
use App\SubMenu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $subMenus = SubMenu::with('menu')->get();

        foreach ($subMenus as $menu){
            if($menu->status){
                $menu->status = '<span class="label label-success">Visible</span>';
            }
            if(!$menu->status){
                $menu->status = '<span class="label label-danger">Not visible</span>';
            }
        }
        return view('admin.menu.submenu.index', compact('subMenus'));
    }

    public function create()
    {
        $pages = Post::all();
        $menus = Menu::all();
        return view('admin.menu.submenu.create',compact('pages','menus'));
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
        $createMenu = SubMenu::create($data);
        if($createMenu){
            return redirect('admin/subMenu');
        }
    }

    public function edit($id)
    {
        $subMenu = SubMenu::find($id);
        $pages = Post::all();
        $menus = Menu::all();
        return view('admin.menu.submenu.create', compact('menus', 'pages','subMenu'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $findMenu = SubMenu::find($id);
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
            return redirect('admin/subMenu');
        }
    }

    public function destroy($id)
    {
        $findMenu = SubMenu::find($id)->delete();
        if($findMenu){
            return redirect('admin/subMenu');
        }
    }
}

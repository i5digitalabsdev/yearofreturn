<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
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
        $branches = Branch::all();
        foreach($branches as $branch){
            if($branch->status){
                $branch->status = '<span class="label label-success">Visible</span>';
            }
            if(!$branch->status){
                $branch->status = '<span class="label label-danger">Not visible</span>';
            }
        }
        return view('admin.branches.index', compact('branches'));
    }


    public function create()
    {
        return view('admin.branches.create');
    }


    public function store(Request $request)
    {
        if(isset($request['status'])){
            $request['status'] = 1;
        }
        else{
            $request['status'] = 0;
        }
        $branch = Branch::create($request->all());
        if($branch){
            return redirect('admin/branch');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $branch = Branch::find($id);
        return view('admin.branches.create', compact('branch'));
    }


    public function update(Request $request, $id)
    {
        if(isset($request['status'])){
            $request['status'] = 1;
        }
        else{
            $request['status'] = 0;
        }
        $branch = Branch::find($id)->update($request->all());
        if($branch){
            return redirect('admin/branch/'.$id.'/edit');
        }
    }


    public function destroy($id)
    {
        $delete = Branch::find($id)->delete();
        if($delete){
            return redirect('admin/branches');
        }
    }

    public function createAuthor(Request $request){
        return PostAuthor::create([
            'author' =>$request['author']
        ]);
    }

    public function createCategory(Request $request){
        return PostCategory::create([
            'category' => $request['category']
        ]);
    }

    public function getAuthors(){
        $authors = PostAuthor::all();
        return response()->json($authors);
    }

    public function getPostCategories(){
        $categories = PostCategory::all();
        return response()->json($categories);
    }

    protected function generateSlug($title){
        $slug = str_replace(array('/', ' '), array('-', '-'), $title);
        return strtolower($slug);
    }
}

<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\PostAuthor;
use App\PostCategory;
use App\SubCategory;

class PostController extends Controller
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
        $posts = Post::all();
        foreach($posts as $post){
            if($post->status){
                $post->status = '<span class="label label-success">Visible</span>';
            }
            if(!$post->status){
                $post->status = '<span class="label label-danger">Not visible</span>';
            }
        }
        return view('admin.pages.index', compact('posts'));
    }


    public function create()
    {
        $categories = $this->getPostCategories();
        $subcategories = $this->getSubCategories();
        return view('admin.pages.create', compact('categories', 'subcategories'));
    }


    public function store(Request $request)
    {
        if(isset($request['status'])){
            $request['status'] = 1;
        }
        else{
            $request['status'] = 0;
        }
        if(isset($request['featured'])){
            $request['featured'] = 1;
        }
        else{
            $request['featured'] = 0;
        }
        $request['slug'] = $this->generateSlug($request['title']);
        $post = Post::create($request->all());
        if($post){
            return redirect('admin/posts');
        }
    }


    public function edit($id)
    {
        $categories = $this->getPostCategories();
        $subcategories = $this->getSubCategories();
        $post = Post::find($id);
        return view('admin.pages.create', compact('post', 'categories', 'subcategories'));
    }


    public function update(Request $request, $id)
    {
        if(isset($request['status'])){
            $request['status'] = 1;
        }
        else{
            $request['status'] = 0;
        }
        if(isset($request['featured'])){
            $request['featured'] = 1;
        }
        else{
            $request['featured'] = 0;
        }
        $post = Post::find($id)->update($request->all());
        if($post){
            return redirect('admin/posts/'.$id.'/edit');
        }
    }


    public function destroy($id)
    {
        $delete = Post::find($id)->delete();
        if($delete){
            return redirect('admin/posts');
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
        return $categories;
        // return response()->json($categories);
    }

    public function getSubCategories(){
        $categories = SubCategory::all();
        return $categories;
        // return response()->json($categories);
    }

    protected function generateSlug($title){
        $slug = str_replace(array('/', ' '), array('-', '-'), $title);
        return strtolower($slug);
    }
}

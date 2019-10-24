<?php

namespace App\Http\Controllers;

use App\application;
use App\ApplicationSteps;
use App\Banner;
use App\Branch;
use App\Contact;
use App\Event;
use App\Events\ApplicationSent;
use App\Helpers\Settings;
use App\Http\Requests\ContactFormRequest;
use App\Member;
use App\Menu;
use App\NewsCut;
use App\NewsImage;
use App\Post;
use App\PostCategory;
use App\SubCategory;
use App\SubMenu;
use App\Works;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * PagesController constructor.
     */
    protected $helpers;
    public function __construct(Settings $helpers)
    {
        return $this->helpers = $helpers;
    }

    public function index()
    {
        $banners = $this->getBanners();
        $menus = $this->getMenu();
           $content = [
               'events' => $this->getFeaturedEvents(),
               'tours' => $this->getFeaturedTours(),
               'food' => $this->getFeaturedFood(),
               'others' => $this->getFeaturedOther()
           ];
        return view('themes.yearofreturn.index', compact('menus', 'banners','content'));
    }
    public function singlePost($category, $slug)
    {
        $menus = $this->getMenu();
        $post = Post::Where('slug', 'LIKE', '%' . $slug . '%')->first();
        $categories = $this->getPostCategories();

        return view('themes.yearofreturn.singlepost', compact('menus', 'post', 'categories'));
    }

    

    public function postList($category)
    {
        $findCat = PostCategory::where('slug', 'LIKE', '%' . $category . '%')->first();
        $posts = Post::Where('category', $findCat->id )->paginate(20);
        $menus = $this->getMenu();
        if(sizeof($posts) == 0){
            abort(404);
        }
        $subcategories  = $this->getSubCategories();
        return view('themes.yearofreturn.postlist', compact('menus', 'posts','subcategories'));
    }

    public function singlePostBySubCat($category, $slug){
        $findCat = SubCategory::where('slug', 'LIKE', '%' . $slug . '%')->first();
        $menus = $this->getMenu();
        
        $posts = Post::Where('sub_category', $findCat->id )->paginate(20);
        if(sizeof($posts) == 0){
            abort(404);
        }
        $subcategories  = $this->getSubCategories();
        return view('themes.yearofreturn.postlist', compact('menus', 'posts','subcategories'));
    }


    public function contact()
    {
        $menus = $this->getMenu();
        return view('themes.yearofreturn.contact', compact('menus'));
    }

    public function postContact(ContactFormRequest $request)
    {
        $contact = Contact::create($request->all());
        if ($contact) {
            return redirect()->back()->with('message', 'Your request was sent successfully we would get back to you shortly');
        } else {
            return redirect()->back()->withErrors('Unable to process your request. Please try again');
        }
    }



    public function getPostCategories(){
        $categories = PostCategory::all();
        return $categories;
    }
    public function getSubCategories(){
        $categories = SubCategory::all();
        return $categories;
    }

    protected function getFeaturedEvents()
    {
        return Post::where('status',1)->where('category', 1)->where('featured', 1)->paginate(5);
    }

    protected function getFeaturedTours()
    {
        return Post::where('status',1)->where('category', 3)->where('featured', 1)->paginate(5);
    }

    protected function getFeaturedFood()
    {
        return Post::where('status',1)->where('category', 2)->where('featured', 1)->paginate(5);
    }

    protected function getFeaturedOther()
    {
        return Post::where('status',1)->where('category', 4)->where('featured', 1)->paginate(1);
    }

    

    protected function findPage($title)
    {

        $page = Post::where('slug', $title)->orWhere('slug', 'LIKE', '%' . $title . '%')->first();
        if (!$page) {
            abort(404);
        }
        return $page;
    }


    protected function getBanners()
    {
        return Banner::where('status', 1)->get();
    }

  
    protected function uploadFiles($file)
    {
        if ($file) {
            $encodedImage = explode(',', $file);
            $image = base64_decode($encodedImage[1]);
            if (str_contains($encodedImage[0], 'pdf')) {
                $extension = 'pdf';
            } else {
                $extension = 'jpeg';
            }
            $file_name = 'DTI' . time() . '.' . $extension;
            $path = 'applicantFiles/' . $file_name;
            file_put_contents($path, $image);
            return $file_name;
        }
    }

    public function getMenu()
    {
        $menus = Menu::with('subMenu')->orderBy('sort', 'asc')->get();
        return $menus;
    }

 
}

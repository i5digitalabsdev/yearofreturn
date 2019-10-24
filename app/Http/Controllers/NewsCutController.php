<?php

namespace App\Http\Controllers;

use App\NewsCut;
use App\NewsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsCutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = NewsCut::where('status',1)->get();
        foreach($news as $new){
            if($new->status){
                $new->status = '<span class="label label-success">Visible</span>';
            }
            if(!$new->status){
                $new->status = '<span class="label label-danger">Not visible</span>';
            }
        }
        return view('admin.newsCuts.index', compact('news'));
    }

    public function create()
    {

        $newsObj = json_encode(uniqid());
        return view('admin.newsCuts.create',compact('newsObj'));
    }

    public function uploadImage(Request $request,$newsId)
    {
        $image = $request->file('file');
        $imageUniqueName = uniqid(). $image->getClientOriginalName();
        $imagePath = 'NewsImages/';
        $image->move($imagePath,$imageUniqueName);
        NewsImage::create([
            'file_name'=> $imageUniqueName,
            'news_id' => $newsId,
            'file_size' => $image->getClientSize(),
            'file_mime' => $image->getClientMimeType(),
            'file_path' => $imagePath.$imageUniqueName
        ]);
    }

    public function getImage($news_id){
        $data = NewsImage::where('news_id', $news_id)->get();
        return response()->json($data);
    }
    public function removeImage($image_id){
        $data = NewsImage::where('id', $image_id)->delete();
        return response()->json($data);
    }

    public function show($id)
    {
        $newsCut = NewsImage::where('news_id', $id)->get();
        return view('admin.newsCuts.show', compact('newsCut','id'));
    }


    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        $request['status']  = 1;

        $news = NewsCut::create($request->all());
        return $news;

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy($id)
    {
        NewsCut::find($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'News cut deleted',
            'alert-type' => 'success'
        );
            return redirect()->back()->with($notification);
    }

//    public function destroy($id)
//    {
//        $find = NewsCut::find($id);
//        $getImagePath = NewsImage::where('news_id',$find->news_id)->get();
//        foreach ($getImagePath as $path){
//            unlink($path->file_path);
//            $path->delete();
//        }
//        $delete = $find->delete();
//        $notification = array(
//            'message' => 'News cut deleted',
//            'alert-type' => 'success'
//        );
//        if($delete){
//            return redirect()->back()->with($notification);
//        }
//
//    }

    public function newsCutHistory()
    {
        return view('admin.newsCuts.history');
    }

   public function newsCutHistoryStaff()
    {
        return view('admin.newsCuts.staffNewsHistory');
    }

    public function getNewsCutReport(Request $request) {
        $date = (explode('-',$request->get('daterange')));

        $mydate_start = strtotime($date[0]);
        $mydate_end = strtotime($date[1]);

        $sql_date_start = date('Y-m-d H:i:s', $mydate_start);
        $sql_date_end = date('Y-m-d H:i:s', $mydate_end);

        $data = NewsCut::whereBetween('created_at', [$sql_date_start, $sql_date_end])->get();
        return view('admin.newsCuts.history', compact('data'));
    }

    public function getNewsCutReportStaff(Request $request) {
        $date = (explode('-',$request->get('daterange')));

        $mydate_start = strtotime($date[0]);
        $mydate_end = strtotime($date[1]);

        $sql_date_start = date('Y-m-d H:i:s', $mydate_start);
        $sql_date_end = date('Y-m-d H:i:s', $mydate_end);

        $data = NewsCut::whereBetween('created_at', [$sql_date_start, $sql_date_end])->get();
        return view('admin.newsCuts.staffNewsHistory', compact('data'));
    }

    public function createGallery(){
            $galleryId = 'EG-1'.uniqid();
            return view('admin.gallery.create', compact('galleryId'));

    }

    public function editGallery($galleryId){
            $gallery = NewsCut::with('getImages')->where('id', $galleryId)->first();
            $gallery['images'] = unserialize($gallery['images']);
            return view('admin.gallery.create', compact('gallery'));
    }

    public function postGallery(Request $request){
        if($request['id'] !== null){
            if(isset($request['status'])){
                $status = 1;
            } else {
                $status = 0;
            }
            $data = [];
            array_push($data, $request['name'], $request['featuredImage']);

            $find = NewsCut::where('id', $request['id'])->first();
            $find->images =  serialize($data);
            $find->status = $status;
            $find->save();

            $notification = array(
                'message' => 'Gallery saved',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        } else {

            if(isset($request['status'])){
                $status = 1;
            } else {
                $status = 0;
            }
            $data1 = [];
            array_push($data1, $request['name'], $request['featuredImage']);
            $newGallery = new NewsCut();
            $newGallery->news_id = $request['galleryId'];
            $newGallery->images = serialize($data1);
            $newGallery->user_id = Auth::user()->id;
            $newGallery->type = '';
//        $newGallery->date = '';
            $newGallery->status = $status;

            $newGallery->save();

            $notification = array(
                'message' => 'Gallery created',
                'alert-type' => 'success'
            );
            return redirect()->to('admin/gallery')->with($notification);
        }


    }

    public function allGallery(){
        // $searchTerm = 'EG-1';
        // $result = NewsCut::where('news_id', 'LIKE', "%{$searchTerm}%")->get();
        // foreach ($result as $results){
        //     $results['images'] = unserialize($results['images']);
        // }
        return view('admin.gallery.index');
    }

    public function deleteGallery($galleryId){
        NewsCut::where('id', $galleryId)->delete();
        $notification = array(
            'message' => 'Gallery deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function deleteGalleryImage($imageId){
        $find = NewsImage::where('id', $imageId)->delete();
        $notification = array(
            'message' => 'Image deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}

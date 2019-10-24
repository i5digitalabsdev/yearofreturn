@extends('layouts.adminLayout')
@section('content')
    <!-- START PAGE CONTENT -->
    <div>
        <div id="page-right-content">
            <div class="container" id="app">
                <div class="row main-content"  style="padding: 0 30px 0 30px">

                    <span><i class="ti ti-angle-left"></i><a href="{{url('admin/gallery')}}">All galleries</a></span>
                    <br>
                    <form method="post" action="@if(isset($gallery)) {{url('admin/gallery/create')}} @else {{url('admin/gallery/create')}}@endif"  enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <h3 class="m-t-10 m-b-20">Add a gallery</h3>
                        <div class="row add-products-container">
                            <div class="col-lg-8 m-t-10 products-details">
                                <div class="col-lg-12 product-entity">
                                    <div class="col-lg-12 form-group m-b-20">
                                        <label for="portfolio-name">Gallery Name</label>
                                        <input  name="name" value="@if(isset($gallery)) {{$gallery->images[0]}} @endif" class="form-control" placeholder="">
                                        <input  name="galleryId" value="@if(isset($gallery)) {{$gallery->news_id}} @else {{$galleryId}} @endif" type="hidden" class="form-control" placeholder="">
                                        <input  name="id" value="@if(isset($gallery)) {{$gallery->id}} @endif" type="hidden" class="form-control" placeholder="">
                                    </div>
                                </div>
                                {{--<div class="col-lg-12 product-entity form-group">--}}
                                    {{--<label for="portfolio-name">Gallery Description</label>--}}
                                    {{--<textarea name="description" class="form-control txteditor" cols="30" rows="10"></textarea>--}}
                                {{--</div>--}}

                                <div class="col-lg-12 product-entity form-group">
                                    <gallery :gallery="@if(isset($gallery)) {{json_encode($gallery->news_id)}}  @else {{json_encode($galleryId)}} @endif"></gallery>
                                    <div class="col-md-12">
                                        @if(isset($gallery))
                                        @foreach($gallery->getImages as $images)
                                        <div class="col-md-1">
                                            <img src="{{url($images->file_path)}}" width="50" height="50" alt="">
                                            <span><a href="{{url('admin/gallery/deleteImage', $images->id)}}" class="btn btn-xs"><span class="fa fa-trash-o"></span></a></span>
                                        </div>
                                        @endforeach
                                            @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 add-products-side">
                                <div class="col-lg-12 product-organization">
                                    <p>Post Preview</p>
                                    <div class=" m-b-20 col-lg-12">

                                    </div>
                                </div>
                                <div class="product-organization">
                                    <p>Gallery Visibility</p>
                                    <div  class="form-group">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox5" @if(isset($gallery)) {{$gallery->status ? 'checked' : ''}} @endif name="status" type="checkbox">
                                            <label for="checkbox5">
                                                Visible
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 product-organization">
                                    <div class=" m-b-20 col-lg-12 form-group">
                                        <p>Add featured image</p>
                                        <button id="lfm" data-input="thumbnail" data-preview="holder" type="button" class="btn btn-default"><span class="fa fa-plus"></span> Upload Image</button>
                                        <input type="hidden" value="@if(isset($gallery)) {{$gallery->images[1]}} @endif"  class="form-control" id="thumbnail" name="featuredImage">
                                        <img id="holder" src="@if(isset($gallery)) {{$gallery->images[1] ? url($gallery->images[1]) : ''}}  @endif" style="margin-top:15px;max-height:100px;display: block">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-t-30">
                            <span ><input type="submit" value="Save Changes" id="buttonSubmit" class="btn btn-primary btn-block"></span>
                        </div>
                    </form>
                </div> <!-- end row -->
            </div>
            <!-- end container -->
        </div>
    </div>
    <!-- End #page-right-content -->
    <div class="clearfix"></div>
    {{--            @include('admin.includes.modals')--}}
@endsection


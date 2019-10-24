@extends('layouts.adminLayout')
@section('content')
            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">

                            <span><i class="ti ti-angle-left"></i><a href="{{url('admin/posts')}}">All pages/posts</a></span>
                            <br>
                            <form method="post" action="@if(isset($post)) {{url('admin/posts/'.$post->id)}} @else {{url('admin/posts')}}@endif"  enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                @if(isset($post))<input type="hidden" name="_method" value="PUT">@endif
                                <h3 class="m-t-10 m-b-20">Add a post</h3>
                                <div class="row add-products-container">
                                    <div class="col-lg-8 m-t-10 products-details">
                                        <div class="col-lg-12 product-entity">
                                            <div class="col-lg-12 form-group m-b-20">
                                                <p>Title</p>
                                                <input value="@if(isset($post)) {{$post->title}} @endif" type="text" name="title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 product-entity form-group">
                                                <p>Brief</p>
                                                <textarea  class="postSummer" name="brief">@if(isset($post)) {!! $post->brief !!} @endif</textarea>
                                        </div>
                                        <div class="col-lg-12 product-entity form-group">
                                                <p>Content</p>
                                                <textarea  class="postSummer" name="content">@if(isset($post)) {!! $post->content !!} @endif</textarea>
                                        </div>
                                        <div class="col-lg-12 product-entity form-group">
                                                <p>Location</p>
                                                <textarea class="postSummer" name="location">@if(isset($post)) {!! $post->location !!} @endif</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 add-products-side">
                                        
                                       
                                        <div class="product-organization">
                                            <p>Post Visibility</p>
                                            <div  class="form-group">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" @if(isset($post)) {{$post->status ? 'checked' : ''}} @endif name="status" type="checkbox">
                                                    <label for="checkbox5">
                                                        Visible
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-organization">
                                                <p>Post Featured</p>
                                                <div  class="form-group">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="checkbox6" @if(isset($post)) {{$post->featured ? 'checked' : ''}} @endif name="featured" type="checkbox">
                                                        <label for="checkbox6">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-lg-12 product-organization">
                                            <div class=" m-b-20 col-lg-12 form-group">
                                                    <p>Category</p>
                                                            <select name="category" class="form-control" id="">
                                                                @foreach($categories as $category)
                                                            <option @if(isset($post)) {{$post->category == $category->id ? 'selected' : ''}} @endif  value="{{$category->id}}">{{$category->category}}</option>
                                                                @endforeach
                                                            </select>
                                                </div>
                                                <div class=" m-b-20 col-lg-12 form-group">
                                                        <p>Sub Category</p>
                                                                <select name="sub_category" class="form-control" id="">
                                                                    @foreach($subcategories as $category)
                                                                    <option value="">None</option>
                                                                <option @if(isset($post)) {{$post->sub_category == $category->id ? 'selected' : ''}} @endif  value="{{$category->id}}">{{$category->category}}</option>
                                                                    @endforeach
                                                                </select>
                                                    </div>
                                                <div class="col-lg-12 form-group m-b-20">
                                                        <p>Date</p>
                                                        <input value="@if(isset($event)) {{$event->date}} @endif" type="datetime-local" name="date" class="form-control">
                                                    </div>
                                            <div class=" m-b-20 col-lg-12 form-group">
                                                <p>Tags <i>(seperate with comma)</i></p>
                                                <input type="text" value="@if(isset($post)) {{$post->tags}} @endif"  name="tags" class="form-control">
                                            </div>

                                            {{--<div class=" m-b-20 col-lg-12 form-group">--}}
                                                {{--<p>Category</p>--}}
                                                {{--<div class="row">--}}
                                                    {{--<div class="col-md-10">--}}
                                                        {{--<select name="category" id="" class="form-control">--}}
{{--                                                            <option @if(isset($post)) {{$post->getCategory->category ? 'selected' : ''}}@endif v-for="category in postCategories" v-bind:value="category.id">@{{category.category}}</option>--}}
                                                        {{--</select>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-2"><button data-toggle="modal" data-target="#addPostCategory" type="button" class="btn btn-default"> <span class="fa fa-plus"></span></button></div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            <div class=" m-b-20 col-lg-12 form-group">
                                                <p>Add featured image</p>
                                                <button id="lfm" data-input="thumbnail" data-preview="holder" type="button" class="btn btn-default"><span class="fa fa-plus"></span> Upload Image</button>
                                                <input type="hidden" value="@if(isset($post)) {{$post->featuredImage}} @endif"  class="form-control" id="thumbnail" name="featuredImage">
                                                <img id="holder" src="@if(isset($post)) {{$post->featuredImage ? url($post->featuredImage) : ''}}  @endif" style="margin-top:15px;max-height:100px;display: block">
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
@extends('layouts.adminLayout')
@section('content')
            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">

                            <span><i class="ti ti-angle-left"></i><a href="{{url('admin/events')}}">All events</a></span>
                            <br>
                            <form method="post" action="@if(isset($event)) {{url('admin/events/'.$event->id)}} @else {{url('admin/events')}}@endif"  enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                @if(isset($event))<input type="hidden" name="_method" value="PUT">@endif
                                <h3 class="m-t-10 m-b-20">Add Event</h3>
                                <div class="row add-products-container">
                                    <div class="col-lg-8 m-t-10 products-details">
                                        <div class="col-lg-12 product-entity">
                                            <div class="col-lg-12 form-group m-b-20">
                                                <p>Title</p>
                                                <input value="@if(isset($event)) {{$event->title}} @endif" type="text" name="title" class="form-control">
                                            </div>
                                            <div class="col-lg-12 product-entity form-group">
                                                <p>Content</p>
                                                <textarea id="postSummer" name="content">@if(isset($event)) {!! $event->content !!} @endif</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 add-products-side">
                                        <div class="product-organization">
                                            <p>Post Visibility</p>
                                            <div  class="form-group">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" @if(isset($event)) {{$event->status ? 'checked' : ''}} @endif name="status" type="checkbox">
                                                    <label for="checkbox5">
                                                        Visible
                                                    </label>
                                                </div>
                                            </div>
                                            <p>Featured</p>
                                            <div  class="form-group">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" @if(isset($event)) {{$event->featured ? 'checked' : ''}} @endif name="featured" type="checkbox">
                                                    <label for="checkbox5">
                                                        Featured
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 product-organization">
                                            <div class=" m-b-20 col-lg-12 form-group">
                                                <p>Category</p>
                                                        <select name="category" class="form-control" id="">
                                                            <option @if(isset($event)) {{$event->category == 'Exim News' ? 'selected' : ''}} @endif value="Exim News">Exmin News</option>
                                                            <option @if(isset($event)) {{$event->category == 'Events' ? 'selected' : ''}} @endif value="Events">Events</option>
                                                            <option @if(isset($event)) {{$event->category == 'Newsletter' ? 'selected' : ''}} @endif value="Newsletter">Newsletter</option>
                                                        </select>
                                            </div>
                                            <div class="col-lg-12 form-group m-b-20">
                                                <p>Date</p>
                                                <input value="@if(isset($event)) {{$event->date}} @endif" type="date" name="date" class="form-control">
                                            </div>
                                            <div class=" m-b-20 col-lg-12 form-group">
                                                <p>Add featured image</p>
                                                <button id="lfm" data-input="thumbnail" data-preview="holder" type="button" class="btn btn-default"><span class="fa fa-plus"></span> Upload Image</button>
                                                <input type="hidden" value="@if(isset($event)) {{$event->featuredImage}} @endif"  class="form-control" id="thumbnail" name="featuredImage">
                                                <img id="holder" src="@if(isset($event)) {{$event->featuredImage ? url($event->featuredImage) : ''}}  @endif" style="margin-top:15px;max-height:100px;display: block">
                                            </div>
                                            <div class=" m-b-20 col-lg-12 form-group">
                                                <p>Upload file</p>
                                                <button id="lfmFile" data-input="filePathLink"  type="button" class="btn btn-default"><span class="fa fa-plus"></span> Upload File</button>
                                                <input type="text" id="filePathLink" value="@if(isset($event)) {{$event->filepath}} @endif"  class="form-control"  name="filepath">
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
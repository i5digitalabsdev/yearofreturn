@extends('layouts.adminLayout')
@section('content')
            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">

                            <span><i class="ti ti-angle-left"></i><a href="{{url('admin/team')}}">All members</a></span>
                            <br>
                            <form method="post" action="@if(isset($member)) {{url('admin/team/'.$member->id)}} @else {{url('admin/team')}}@endif"  enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                @if(isset($member))<input type="hidden" name="_method" value="PUT">@endif
                                <h3 class="m-t-10 m-b-20">Add Member</h3>
                                <div class="row add-products-container">
                                    <div class="col-lg-8 m-t-10 products-details">
                                        <div class="col-lg-12 product-entity">
                                            <div class="col-lg-12 form-group m-b-20">
                                                <p>Name</p>
                                                <input value="@if(isset($member)) {{$member->name}} @endif" type="text" name="name" class="form-control">
                                            </div>
                                            <div class="col-lg-12 form-group m-b-20">
                                                <p>Position</p>
                                                <input value="@if(isset($member)) {{$member->position}} @endif" type="text" name="position" class="form-control">
                                            </div>
                                            <div class="col-lg-12 product-entity form-group">
                                                <p>Content</p>
                                                <textarea id="postSummer" name="content">@if(isset($member)) {!! $member->content !!} @endif</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 add-products-side">
                                        <div class="product-organization">
                                            <p>Post Visibility</p>
                                            <div  class="form-group">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" @if(isset($member)) {{$member->status ? 'checked' : ''}} @endif name="status" type="checkbox">
                                                    <label for="checkbox5">
                                                        Visible
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 product-organization">
                                            <div class=" m-b-20 col-lg-12 form-group">
                                                <p>Category</p>
                                                    <div class="col-md-12">
                                                        <select name="category" class="form-control" id="">
                                                            <option @if(isset($member)) {{$member->category == 'Board of Directors' ? 'selected' : ''}} @endif value="Board of Directors">Board of Directors</option>
                                                            <option @if(isset($member)) {{$member->category == 'Executive Management' ? 'selected' : ''}} @endif value="Executive Management">Executive Management</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class=" m-b-20 col-lg-12 form-group">
                                                <p>Add featured image</p>
                                                <button id="lfm" data-input="thumbnail" data-preview="holder" type="button" class="btn btn-default"><span class="fa fa-plus"></span> Upload Image</button>
                                                <input type="hidden" value="@if(isset($member)) {{$member->featuredImage}} @endif"  class="form-control" id="thumbnail" name="featuredImage">
                                                <img id="holder" src="@if(isset($member)) {{$member->featuredImage ? url($member->featuredImage) : ''}}  @endif" style="margin-top:15px;max-height:100px;display: block">
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
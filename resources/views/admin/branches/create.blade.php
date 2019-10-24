@extends('layouts.adminLayout')
@section('content')
            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">
                            <span><i class="ti ti-angle-left"></i><a href="{{url('admin/branch')}}">All pages/posts</a></span>
                            <br>
                            <form method="post" action="@if(isset($branch)) {{url('admin/branch/'.$branch->id)}} @else {{url('admin/branch')}}@endif"  enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                @if(isset($branch))<input type="hidden" name="_method" value="PUT">@endif
                                <h3 class="m-t-10 m-b-20">Add a branch</h3>
                                <div class="row add-products-container">
                                    <div class="col-lg-8 m-t-10 products-details">
                                        <div class="col-lg-12 product-entity">
                                            <div class="col-lg-12 form-group m-b-20">
                                                <p>Branch Name</p>
                                                <input value="@if(isset($branch)) {{$branch->name}} @endif" type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 product-entity form-group">
                                                <p>Content</p>
                                                <textarea id="postSummer" name="content">@if(isset($branch)) {!! $branch->content !!} @endif</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 add-products-side">
                                        <div class="product-organization">
                                            <p> Visibility</p>
                                            <div  class="form-group">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" @if(isset($branch)) {{$branch->status ? 'checked' : ''}} @endif name="status" type="checkbox">
                                                    <label for="checkbox5">
                                                        Visible
                                                    </label>
                                                </div>
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
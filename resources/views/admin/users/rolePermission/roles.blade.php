@extends('layouts.adminLayout')
@section('content')
    <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">
                            <span><i class="ti ti-angle-left"></i><a href="{{url('admin/users')}}">All users</a></span>
                            <br>
                            <form method="post"  enctype="multipart/form-data" >
                                <h3 class="m-t-10 m-b-20">Role / Permission</h3>
                                <div class="row add-products-container">
                                    <div class="col-lg-4 m-t-10 products-details">
                                       <user-roles :roles="{{$roles}}"></user-roles>
                                    </div>

                                    <div class="col-lg-8 m-t-10 products-details">
                                        <list-permission :permission="{{$permissions}}" :roles="{{$roles}}"></list-permission>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row m-t-10">
                                    <div class="col-lg-12 m-t-10 products-details">

                                    </div>
                                </div>
                            </form>
                        </div> <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
            </div>
    <div class="clearfix"></div>
{{--    @include('admin.includes.modals')--}}
@endsection

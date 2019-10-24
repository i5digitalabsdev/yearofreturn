@extends('layouts.adminLayout')
@section('content')
            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">
                            <span><i class="ti ti-angle-left"></i><a href="{{url('admin/newsCuts')}}">All pages/posts</a></span>
                            <br>
                        </div><!-- end row -->
                        <news-cut :news="{{$newsObj}}"></news-cut>
                    </div>
                    <!-- end container -->
                </div>
            </div>
            <!-- End #page-right-content -->
            <div class="clearfix"></div>
@endsection
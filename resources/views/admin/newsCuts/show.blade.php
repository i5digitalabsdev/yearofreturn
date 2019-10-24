@extends('layouts.adminLayout')
@section('content')
    <!-- START PAGE CONTENT -->
    <div>
        <div id="page-right-content">
            <div class="container">
                <div class="row main-content"  style="padding: 0 30px 0 30px">
                    <span><i class="ti ti-angle-left"></i><a href="{{url('admin/newsCuts')}}">All Services</a></span>
                    <br>
                    <edit-services news_id="{{$id}}"></edit-services>
                </div><!-- end row -->
            </div>
            <!-- end container -->
        </div>
    </div>
    <!-- End #page-right-content -->
    <div class="clearfix"></div>
@endsection
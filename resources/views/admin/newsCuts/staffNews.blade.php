<!DOCTYPE html>
<html lang="en">

<head>
    @include ('admin.includes.head')
</head>

<body>

<div id="page-wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Top navbar -->
{{--    @include('admin.includes.topBar')--}}
    <!-- end navbar -->
    </div>
    <!-- Top Bar End -->

    <!-- Page content start -->
    <div id="app">
        <div class="page-contentbar">
            <!--left navigation start-->
            <aside class="sidebar-navigation">
                <div class="scrollbar-wrapper" style="background: rgb(226,226,226)">
                    <div>
                        <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                            <i class="mdi mdi-close"></i>
                        </button>
                        <!-- Left Menu Start -->
                        <ul class="metisMenu nav" id="side-menu">
                            {{--<li><a href="#"><i class="ti-home"></i> Home </a></li>--}}
                            <li><a href="#"><i class="fa fa-paper-plane"></i> News cuts <span class="fa arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="true">
                                    <li><a href="{{url('admin/gheximdailynewscuts')}}"> News cuts</a></li>
                                    <li><a href="{{url('admin/newsCutHistoryStaff')}}"> News Cut History</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!--Scrollbar wrapper-->
            </aside>
            <!--left navigation end-->

            <!-- START PAGE CONTENT -->
            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">
                            {{--<span><i class="ti ti-angle-left"></i><a href="{{url('admin/newsCuts')}}">All News Cuts</a></span>--}}
                            <br>
                            <h3 class="m-t-10 m-b-20">GEXIM Daily News Cuts</h3>
                            <div class="row add-products-container">
                                <div class="col-lg-12 m-t-10 products-details">
                                    @foreach($newsCut as $images)
                                        <a data-lightbox="image" href="{{url($images->file_path)}}">
                                            <div class="col-md-2 m-t-10">
                                                <div class="col-md-12">
                                                    <div class="">
                                                        <img style="border-radius: 8px" class="img-responsive hvr-grow" src="{{url($images->file_path)}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div><!-- end row -->

                    </div>
                    <!-- end container -->
                </div>
            </div>
            <!-- End #page-right-content -->
            <div class="clearfix"></div>
        <!-- End #page-right-content -->

            <div class="clearfix"></div>

        </div>
    </div>
    <!-- end .page-contentbar -->
</div>
<!-- End #page-wrapper -->
@include ('admin.includes.scripts')
</body>

</html>

{{--@extends('layouts.adminLayout')--}}
{{--@section('content')--}}
   {{----}}
{{--@endsection--}}
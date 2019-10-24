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
    @include('admin.includes.topBar')
    <!-- end navbar -->
    </div>
    <!-- Top Bar End -->

    <!-- Page content start -->
    <div id="app">
        <div class="page-contentbar">
            <!--left navigation start-->
            <aside class="sidebar-navigation">
                @include('admin.includes.side')
            </aside>
            <!--left navigation end-->

            <!-- START PAGE CONTENT -->
        @yield('content')
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
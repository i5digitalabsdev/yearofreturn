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
                <form method="get" action="/admin/getNewsCutHistory"   enctype="multipart/form-data" >
                    <h3 class="m-t-10 m-b-20">Search News cut history</h3>
                    <div class="row add-products-container">
                        <div class="col-lg-8 m-t-10 products-details">
                            <div class="col-lg-12 product-entity">
                                <div class="col-lg-12 form-group m-b-20">
                                    <p>Select Date range</p>
                                    <div class=" col-md-12 input-daterange input-group" id="date-range">
                                        <input  type="text" name="daterange" value="" class="form-control" />
                                    </div>
                                    <button type="submit" class="btn btn-default"><span class="fa fa-search"></span> Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            @foreach($data as $dataImages)
                                @foreach($dataImages->getImages as $images)
                                <a data-lightbox="image" href="{{url($images->file_path)}}">
                                    <div class="col-md-2 m-t-10">
                                        <div class="col-md-12">
                                            <div class="">
                                                <img style="border-radius: 8px" class="img-responsive hvr-grow" width="100" height="100" src="{{url($images->file_path)}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </form>
            </div>
            <!-- end container -->
        </div>
    </div>
    <!-- End #page-right-content -->
    <div class="clearfix"></div>
@endsection
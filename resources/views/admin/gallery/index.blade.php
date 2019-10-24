@extends('layouts.adminLayout')
@section('content')
    <!-- START PAGE CONTENT -->
    <div>
        <div id="page-right-content">
            <div class="container">
                <div class="row"  style="padding: 0 30px 0 30px">
                    <h3 class="m-t-0 m-b-20">Gallery</h3>
                    <div class="row">
                        <span class="pull-right"><a class="btn btn-danger" href="{{url('admin/gallery/create')}}">Add a new gallery</a></span>
                    </div>
                    <div class="row all-products">
                        <div class="table-responsive table-striped ">
                            <table class="table m-0">
                                <thead>
                                <tr>
                                    <th>image</th>
                                    <th>Name</th>
                                    {{--<th>Status</th>--}}
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($result as $newsCut)
                                    <tr>
                                        <td><img src="{{url($newsCut->images[1])}}" width="50" height="50" alt=""></td>
                                        <td>{{$newsCut->images[0]}}</td>
                                        <td>
                                            <span><a href="{{url('admin/gallery/edit', $newsCut->id)}}" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a></span>
                                            <span><a href="{{url('admin/gallery/delete', $newsCut->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
            <!-- end container -->
        </div>
    </div>
    <!-- End #page-right-content -->
    <div class="clearfix"></div>
    {{--            @include('admin.includes.modals')--}}
@endsection

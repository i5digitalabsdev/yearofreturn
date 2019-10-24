@extends('layouts.adminLayout')
@section('content')
    <!-- START PAGE CONTENT -->
    <div>
        <div id="page-right-content">
            <div class="container">
                <div class="row"  style="padding: 0 30px 0 30px">
                    <h3 class="m-t-0 m-b-20">Service Type</h3>
                    <div class="row">
                        <span class="pull-right"><a class="btn btn-danger" href="{{url('admin/newsCuts/create')}}">Add a new service type</a></span>
                    </div>
                    <div class="row all-products">
                        <div class="table-responsive table-striped ">
                            <table class="table m-0">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $newsCut)
                                    <tr>
                                        <td>{{$newsCut->type}}</td>
                                        <td>{!! $newsCut->status !!}</td>
                                        <td>
                                            <form action="{{url('admin/newsCuts',$newsCut->id)}}" method="post">
                                                <span><a href="{{url('admin/newsCuts/'.$newsCut->news_id)}}" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a></span>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <span><button type="submit"  class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i></button></span>
                                            </form>
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

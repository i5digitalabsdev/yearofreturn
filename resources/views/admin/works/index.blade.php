@extends('layouts.adminLayout')
@section('content')
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row"  style="padding: 0 30px 0 30px">
                            <h3 class="m-t-0 m-b-20">Featured Works</h3>
                            <div class="row">
                                <span class="pull-right"><a class="btn btn-danger" href="{{url('admin/works/create')}}">Add featured works</a></span>
                            </div>
                            <div class="row all-products">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($works as $banner)
                                            <tr>
                                            <td><img id="holder" src="{{url($banner->filepath)}}" style="max-height:50px;max-width:200px;"></td>
                                            <td>{{$banner->position}}</td>
                                            <td>{!!$banner->status!!}</td>
                                            <td>
                                                <form action="{{url('admin/works',$banner->id)}}" method="post">
                                                    <span><a href="{{url('admin/works/'.$banner->id .'/edit')}}" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a></span>

                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <span><button type="submit"  class="btn btn-default btn-xs delete"><i class="fa fa-trash-o"></i></button></span>
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
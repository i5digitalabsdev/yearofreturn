@extends('layouts.adminLayout')
@section('content')
            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row"  style="padding: 0 30px 0 30px">
                            <h3 class="m-t-0 m-b-20">Pages</h3>
                            <div class="row">
                                <span class="pull-right"><a class="btn btn-danger" href="{{url('admin/posts/create')}}">Add a page/post</a></span>
                            </div>
                            <div class="row all-products">
                                <div class="table-responsive table-striped ">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Featured</th>
                                            <th>Views</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($posts as $post)
                                            <tr>
                                                <td>{{$post->title}}</td>
                                            <td>{{$post->getCategory->category}}</td>
                                            <td>{{$post->featured}}</td>
                                            <td>{{$post->views}}</td>
                                                <td>{!! $post->status !!}</td>
                                                <td>
                                                    <form action="{{url('/admin/posts',$post->id)}}" method="post">
                                                        <form action="/admin/posts/?"{{$post->id}} ></form>
                                                        <span><a href="{{url('admin/posts/'.$post->id .'/edit')}}" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a></span>

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

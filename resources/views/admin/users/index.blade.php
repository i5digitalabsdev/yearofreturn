@extends('layouts.adminLayout')
@section('content')
            <div>
                <div id="page-right-content">
                    <div class="container">
                        {{--<div class="col-lg-3 message-container animated fadeIn">--}}
                            {{--@include('admin.includes.messages')--}}
                        {{--</div>--}}
                        <div class="row"  style="padding: 0 30px 0 30px">
                            <h3 class="m-t-0 m-b-20">Users</h3>
                            <div class="row">
                                <span class="pull-right"><button class="btn btn-danger" data-toggle="modal" data-target="#addUserModal">Add a user</button></span>
                            </div>
                            <users :users="{{$users}}"></users>
                        </div> <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
            </div>
            <!-- End #page-right-content -->
            <div class="clearfix"></div>
            <div id="addUserModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form method="post" action=" {{url('admin/addNewUser')}} "  enctype="multipart/form-data" >
                        {{ csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Add new user</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Name</label>
                                        <input type="text" name="name" required class="form-control" id="field-1" placeholder="John">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Email</label>
                                        <input type="email"  name="email" required class="form-control" id="field-3" placeholder="example@gmail.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Role</label>
                                        <select name="role"  required class="form-control">
                                            @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div><!-- /.modal -->

            {{--            @include('admin.includes.modals')--}}
@endsection

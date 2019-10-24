@extends('layouts.adminLayout')
@section('content')
    <!-- START PAGE CONTENT -->
    <div>
        <div id="page-right-content">
            <div class="container">
                <div class="row main-content"  style="padding: 0 30px 0 30px">
                    <div class="col-lg-3 message-container animated fadeIn">
                        @include('admin.includes.messages')
                    </div>
                    <br>
                    <form method="post" action=" {{url('admin/updateSettings')}} "  enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <h3 class="m-t-10 m-b-20">Update settings</h3>
                        <div class="row add-products-container">
                            <div class="col-lg-8 m-t-10 products-details">
                                <div class="col-lg-12 product-entity">
                                    <div class="col-lg-12 form-group m-b-20">
                                        <p>Name</p>
                                        <input value="{{$user->name}}" type="text"  name="name" class="form-control">
                                    </div>
                                    <div class="col-lg-12 form-group m-b-20">
                                        <p>Email</p>
                                        <input value="{{$user->email}}" type="email" required name="email" class="form-control">
                                    </div>
                                    <div class="col-lg-12 form-group m-b-20">
                                        <p>Password</p>
                                        <input value="*******" disabled type="text" class="form-control">
                                        <button type="button" data-toggle="modal" data-target="#changePass" class="btn btn-danger btn-sm">Change password</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 add-products-side">
                            </div>
                        </div>
                        <div class="col-md-3 m-t-30">
                            <span ><input type="submit" value="Save Changes" id="buttonSubmit" class="btn btn-primary btn-block"></span>
                        </div>
                    </form>
                </div> <!-- end row -->
            </div>
            <!-- end container -->
        </div>
    </div>
    <!-- End #page-right-content -->
    <div class="clearfix"></div>
    {{--            @include('admin.includes.modals')--}}
    <div id="changePass" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <form method="post" action=" {{url('admin/updateAdminPassword')}} "  enctype="multipart/form-data" >
                {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Change user password</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Current password</label>
                                <input type="password" name="current_password" required  class="form-control" id="field-1" placeholder="******">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-1" class="control-label">New password</label>
                                <input type="password" name="new_password" required  class="form-control" id="field-1" placeholder="******">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Confirm password</label>
                                <input type="password" name="new_password_confirmation" required  class="form-control" id="field-1" placeholder="******">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-info waves-effect waves-light">Save changes</button>
                </div>
            </div>
            </form>
        </div>
    </div><!-- /.modal -->

@endsection
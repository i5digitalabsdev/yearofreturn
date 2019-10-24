@extends('layouts.adminLayout')
@section('content')
            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">

                            <span><i class="ti ti-angle-left"></i><a href="{{url('admin/works')}}">All Works</a></span>
                            <br>
                            <form method="post" action="@if(isset($work)) {{url('admin/works/'.$work->id)}} @else {{url('admin/works')}}@endif"  enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                @if(isset($work))<input type="hidden" name="_method" value="PUT">@endif
                                <h3 class="m-t-10 m-b-20">Add a featured work</h3>
                                <div class="row add-products-container">
                                    <div class="col-lg-8 m-t-10 products-details">
                                        <div class="col-lg-12 product-entity">
                                            <div class="col-lg-12 form-group m-b-20">
                                                <button id="lfm" data-input="thumbnail" data-preview="holder" type="button" class="btn btn-default"><span class="fa fa-plus"></span> Upload Image</button>
                                                <input type="hidden" value="@if(isset($work)){{$work->filepath}} @endif" class="form-control" id="thumbnail" name="filepath">
                                            </div>
                                            <div class="col-lg-12 product-organization">
                                                <label for="">Image Preview</label>
                                                <img id="holder" src="@if(isset($work)){{url($work->filepath)}} @endif" style="margin-top:15px;max-height:100px;display: block">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 product-entity">
                                            <div class="col-lg-6 product-organization">
                                                <p>Work Caption</p>
                                                <textarea id="summernote"   name="work_caption">
                                                    @if(isset($work))
                                                        {!! $work->work_caption !!}
                                                        @endif
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 product-entity">
                                            <div class="col-lg-6 product-organization">
                                                <p>Work Category</p>
                                                <select name="category" class="form-control" id="">
                                                    <option value="@if(isset($work)) {{$work->category}} @endif">@if(isset($work)) {{$work->category}} @endif</option>
                                                    <option value="wood">Wood work</option>
                                                    <option value="metal">Metal work</option>
                                                    <option selected value="art">Art work</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-4 add-products-side">
                                        <div class="product-organization">
                                            <p>Work Visibility</p>
                                            <div  class="form-group">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" @if(isset($work)) {{$work->status ? 'checked' : ''}} @endif  name="status" type="checkbox">
                                                    <label for="checkbox5">
                                                        Visible
                                                    </label>
                                                </div>
                                            </div>
                                            <p>Work Position</p>
                                            <div class="form-group">
                                                <select name="position" class="form-control" id="">
                                                    <option value="@if(isset($work)) {{$work->position}} @endif">@if(isset($work)) {{$work->position}} @endif</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                        </div>
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
@endsection
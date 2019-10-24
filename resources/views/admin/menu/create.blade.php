@extends('layouts.adminLayout')
@section('content')
            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">
                            <span><i class="ti ti-angle-left"></i><a href="{{url('admin/menu')}}">Parent Menu</a></span>
                            <br>
                            <form method="post" action="@if(isset($menu)) {{url('admin/menu/'.$menu->id)}} @else {{url('admin/menu')}}@endif"  enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                @if(isset($menu))<input type="hidden" name="_method" value="PUT">@endif
                                <h3 class="m-t-10 m-b-20">Add Parent Menu</h3>
                                <div class="row add-products-container">
                                    <div class="col-lg-8 m-t-10 products-details">
                                        <div class="col-lg-12 product-entity">
                                            <div class="col-lg-12 form-group m-b-20">
                                                <p>Menu Name</p>
                                                <input value="@if(isset($menu)) {{$menu->menuName}} @endif" type="text" name="menuName" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 product-entity form-group">
                                                <p>Menu Page</p>
                                            <select name="url" class="form-control" id="">
                                                <option value="">--Select a Page --</option>
                                            @foreach($pages as $page)
                                                <option value="{{$page->slug}}">{{$page->title}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-12 form-group m-b-20">
                                                <p>Option Menu</p>
                                                <input value="@if(isset($menu)) {{$menu->url}} @endif" type="text" name="url" class="form-control">
                                            </div>
                                    </div>

                                    <div class="col-lg-4 add-products-side">
                                        <div class="product-organization">
                                            <p> Visibility</p>
                                            <div  class="form-group">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" @if(isset($menu)) {{$menu->status ? 'checked' : ''}} @endif name="status" type="checkbox">
                                                    <label for="checkbox5">
                                                        Visible
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-organization">
                                            <div  class="form-group">
                                                <p> Position</p>
                                                <select name="sort" class="form-control" id="">
                                                        <option @if(isset($menu)) {{$menu->sort == '1' ? 'selected' : ''}} @endif value="1">1</option>
                                                        <option @if(isset($menu)) {{$menu->sort == '2' ? 'selected' : ''}} @endif value="2">2</option>
                                                        <option @if(isset($menu)) {{$menu->sort == '3' ? 'selected' : ''}} @endif value="3">3</option>
                                                        <option @if(isset($menu)) {{$menu->sort == '4' ? 'selected' : ''}} @endif value="4">4</option>
                                                        <option @if(isset($menu)) {{$menu->sort == '5' ? 'selected' : ''}} @endif value="5">5</option>
                                                        <option @if(isset($menu)) {{$menu->sort == '6' ? 'selected' : ''}} @endif value="6">6</option>
                                                        <option @if(isset($menu)) {{$menu->sort == '7' ? 'selected' : ''}} @endif value="7">7</option>
                                                        <option @if(isset($menu)) {{$menu->sort == '8' ? 'selected' : ''}} @endif value="8">8</option>
                                                        <option @if(isset($menu)) {{$menu->sort == '9' ? 'selected' : ''}} @endif value="9">9</option>
                                                        <option @if(isset($menu)) {{$menu->sort == '10' ? 'selected' : ''}} @endif selected value="10">10 (Default)</option>
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
{{--            @include('admin.includes.modals')--}}
@endsection
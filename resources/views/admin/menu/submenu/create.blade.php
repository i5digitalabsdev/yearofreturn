@extends('layouts.adminLayout')
@section('content')
            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">
                            <span><i class="ti ti-angle-left"></i><a href="{{url('admin/subMenu')}}">Sub Menu</a></span>
                            <br>
                            <form method="post" action="@if(isset($subMenu)) {{url('admin/subMenu/'.$subMenu->id)}} @else {{url('admin/subMenu')}}@endif"  enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                @if(isset($subMenu))<input type="hidden" name="_method" value="PUT">@endif
                                <h3 class="m-t-10 m-b-20">Add a Submenu</h3>
                                <div class="row add-products-container">
                                    <div class="col-lg-8 m-t-10 products-details">
                                        <div class="col-lg-12 product-entity">
                                            <div class="col-lg-12 form-group m-b-20">
                                                <p>Menu Name</p>
                                                <input value="@if(isset($subMenu)) {{$subMenu->menuName}} @endif" type="text" name="menuName" class="form-control">
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
                                        <div class="col-lg-12 product-entity form-group">
                                                <p>Parent Menu</p>
                                            <select name="menu_id" class="form-control" >
                                                <option selected  value="">--Select Parent Menu--</option>
                                                @foreach($menus as $menu)
                                                    <option value="{{$menu->id}}">{{$menu->menuName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 add-products-side">
                                        <div class="product-organization">
                                            <p> Visibility</p>
                                            <div  class="form-group">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" @if(isset($subMenu)) {{$subMenu->status ? 'checked' : ''}} @endif name="status" type="checkbox">
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
                                                        <option @if(isset($subMenu)) {{$subMenu->sort == '1' ? 'selected' : ''}} @endif value="1">1</option>
                                                        <option @if(isset($subMenu)) {{$subMenu->sort == '2' ? 'selected' : ''}} @endif value="2">2</option>
                                                        <option @if(isset($subMenu)) {{$subMenu->sort == '3' ? 'selected' : ''}} @endif value="3">3</option>
                                                        <option @if(isset($subMenu)) {{$subMenu->sort == '4' ? 'selected' : ''}} @endif value="4">4</option>
                                                        <option @if(isset($subMenu)) {{$subMenu->sort == '5' ? 'selected' : ''}} @endif value="5">5</option>
                                                        <option @if(isset($subMenu)) {{$subMenu->sort == '6' ? 'selected' : ''}} @endif value="6">6</option>
                                                        <option @if(isset($subMenu)) {{$subMenu->sort == '7' ? 'selected' : ''}} @endif value="7">7</option>
                                                        <option @if(isset($subMenu)) {{$subMenu->sort == '8' ? 'selected' : ''}} @endif value="8">8</option>
                                                        <option @if(isset($subMenu)) {{$subMenu->sort == '9' ? 'selected' : ''}} @endif value="9">9</option>
                                                        <option @if(isset($subMenu)) {{$subMenu->sort == '10' ? 'selected' : ''}} @endif selected value="10">10 (Default)</option>
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
@extends('layouts.adminLayout')
@section('content')
            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">

                            <span><i class="ti ti-angle-left"></i><a href="{{url('admin/homeSlider')}}">All banners</a></span>
                            <br>
                            <form method="post" action="@if(isset($banner)) {{url('admin/homeSlider/'.$banner->id)}} @else {{url('admin/homeSlider')}}@endif"  enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                @if(isset($banner))<input type="hidden" name="_method" value="PUT">@endif
                                <h3 class="m-t-10 m-b-20">Add a banner</h3>
                                <div class="row add-products-container">
                                    <div class="col-lg-8 m-t-10 products-details">
                                        <div class="col-lg-12 product-entity">
                                            <div class="col-lg-12 form-group m-b-20">
                                                <button id="lfm" data-input="thumbnail" data-preview="holder" type="button" class="btn btn-default"><span class="fa fa-plus"></span> Upload Image</button>
                                                <input type="hidden" value="@if(isset($banner)){{$banner->filepath}} @endif" class="form-control" id="thumbnail" name="filepath">
                                            </div>
                                            <div class="col-lg-12 product-organization">
                                                <label for="">Image Preview</label>
                                                <img id="holder" src="@if(isset($banner)){{url($banner->filepath)}} @endif" style="margin-top:15px;max-height:100px;display: block">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 product-entity">
                                            <div class="col-lg-6 product-organization">
                                                <p>Banner Caption</p>
                                                <textarea id="summernote"   name="bannerCaption">
                                                    @if(isset($banner))
                                                        {!! $banner->bannerCaption !!}
                                                        @endif
                                                </textarea>
                                            </div>
                                            <div class="col-lg-6">
                                                <p>Banner caption styles</p>
                                                <select name="bannerStyle" id="" class="form-control">

                                                    <option value="@if(isset($banner)) {{$banner->bannerStyle}} @endif">@if(isset($banner)) {{$banner->bannerStyle}} @endif</option>
                                                    <option value="">-- Select animation style --</option>
                                                    <optgroup label="Attention Seekers">
                                                        <option value="bounce">bounce</option>
                                                        <option value="flash">flash</option>
                                                        <option value="pulse">pulse</option>
                                                        <option value="rubberBand">rubberBand</option>
                                                        <option value="shake">shake</option>
                                                        <option value="swing">swing</option>
                                                        <option value="tada">tada</option>
                                                        <option value="wobble">wobble</option>
                                                        <option value="jello">jello</option>
                                                    </optgroup>

                                                    <optgroup label="Bouncing Entrances">
                                                        <option value="bounceIn">bounceIn</option>
                                                        <option value="bounceInDown">bounceInDown</option>
                                                        <option value="bounceInLeft">bounceInLeft</option>
                                                        <option value="bounceInRight">bounceInRight</option>
                                                        <option value="bounceInUp">bounceInUp</option>
                                                    </optgroup>

                                                    <optgroup label="Bouncing Exits">
                                                        <option value="bounceOut">bounceOut</option>
                                                        <option value="bounceOutDown">bounceOutDown</option>
                                                        <option value="bounceOutLeft">bounceOutLeft</option>
                                                        <option value="bounceOutRight">bounceOutRight</option>
                                                        <option value="bounceOutUp">bounceOutUp</option>
                                                    </optgroup>

                                                    <optgroup label="Fading Entrances">
                                                        <option value="fadeIn">fadeIn</option>
                                                        <option value="fadeInDown">fadeInDown</option>
                                                        <option value="fadeInDownBig">fadeInDownBig</option>
                                                        <option value="fadeInLeft">fadeInLeft</option>
                                                        <option value="fadeInLeftBig">fadeInLeftBig</option>
                                                        <option value="fadeInRight">fadeInRight</option>
                                                        <option value="fadeInRightBig">fadeInRightBig</option>
                                                        <option value="fadeInUp">fadeInUp</option>
                                                        <option value="fadeInUpBig">fadeInUpBig</option>
                                                    </optgroup>

                                                    <optgroup label="Fading Exits">
                                                        <option value="fadeOut">fadeOut</option>
                                                        <option value="fadeOutDown">fadeOutDown</option>
                                                        <option value="fadeOutDownBig">fadeOutDownBig</option>
                                                        <option value="fadeOutLeft">fadeOutLeft</option>
                                                        <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                                        <option value="fadeOutRight">fadeOutRight</option>
                                                        <option value="fadeOutRightBig">fadeOutRightBig</option>
                                                        <option value="fadeOutUp">fadeOutUp</option>
                                                        <option value="fadeOutUpBig">fadeOutUpBig</option>
                                                    </optgroup>

                                                    <optgroup label="Flippers">
                                                        <option value="flip">flip</option>
                                                        <option value="flipInX">flipInX</option>
                                                        <option value="flipInY">flipInY</option>
                                                        <option value="flipOutX">flipOutX</option>
                                                        <option value="flipOutY">flipOutY</option>
                                                    </optgroup>

                                                    <optgroup label="Lightspeed">
                                                        <option value="lightSpeedIn">lightSpeedIn</option>
                                                        <option value="lightSpeedOut">lightSpeedOut</option>
                                                    </optgroup>

                                                    <optgroup label="Rotating Entrances">
                                                        <option value="rotateIn">rotateIn</option>
                                                        <option value="rotateInDownLeft">rotateInDownLeft</option>
                                                        <option value="rotateInDownRight">rotateInDownRight</option>
                                                        <option value="rotateInUpLeft">rotateInUpLeft</option>
                                                        <option value="rotateInUpRight">rotateInUpRight</option>
                                                    </optgroup>

                                                    <optgroup label="Rotating Exits">
                                                        <option value="rotateOut">rotateOut</option>
                                                        <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                                        <option value="rotateOutDownRight">rotateOutDownRight</option>
                                                        <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                                        <option value="rotateOutUpRight">rotateOutUpRight</option>
                                                    </optgroup>

                                                    <optgroup label="Sliding Entrances">
                                                        <option value="slideInUp">slideInUp</option>
                                                        <option value="slideInDown">slideInDown</option>
                                                        <option value="slideInLeft">slideInLeft</option>
                                                        <option value="slideInRight">slideInRight</option>

                                                    </optgroup>
                                                    <optgroup label="Sliding Exits">
                                                        <option value="slideOutUp">slideOutUp</option>
                                                        <option value="slideOutDown">slideOutDown</option>
                                                        <option value="slideOutLeft">slideOutLeft</option>
                                                        <option value="slideOutRight">slideOutRight</option>

                                                    </optgroup>

                                                    <optgroup label="Zoom Entrances">
                                                        <option value="zoomIn">zoomIn</option>
                                                        <option value="zoomInDown">zoomInDown</option>
                                                        <option value="zoomInLeft">zoomInLeft</option>
                                                        <option value="zoomInRight">zoomInRight</option>
                                                        <option value="zoomInUp">zoomInUp</option>
                                                    </optgroup>

                                                    <optgroup label="Zoom Exits">
                                                        <option value="zoomOut">zoomOut</option>
                                                        <option value="zoomOutDown">zoomOutDown</option>
                                                        <option value="zoomOutLeft">zoomOutLeft</option>
                                                        <option value="zoomOutRight">zoomOutRight</option>
                                                        <option value="zoomOutUp">zoomOutUp</option>
                                                    </optgroup>

                                                    <optgroup label="Specials">
                                                        <option value="hinge">hinge</option>
                                                        <option value="jackInTheBox">jackInTheBox</option>
                                                        <option value="rollIn">rollIn</option>
                                                        <option value="rollOut">rollOut</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 product-entity">
                                            <p>Call to action button</p>
                                            <div>
                                                <label for="">Url</label>
                                                <input type="url" value="@if(isset($banner)) {{$banner->btnUrl}} @endif" name="btnUrl" class="form-control">
                                            </div>
                                            <br>
                                            <div>
                                                <label for="">Button text</label>
                                                <input type="text" value="@if(isset($banner)) {{$banner->btnText}} @endif" name="btnText" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-4 add-products-side">
                                        <div class="product-organization">
                                            <p>Banner Visibility</p>
                                            <div  class="form-group">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" @if(isset($banner)) {{$banner->status ? 'checked' : ''}} @endif  name="status" type="checkbox">
                                                    <label for="checkbox5">
                                                        Visible
                                                    </label>
                                                </div>
                                            </div>
                                            <p>Banner Position</p>
                                            <div class="form-group">
                                                <select name="position" class="form-control" id="">
                                                    <option value="@if(isset($banner)) {{$banner->position}} @endif">@if(isset($banner)) {{$banner->position}} @endif</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta details -->
    @include('themes/eximBank/includes/head')

    <title>Ghana EXIM Bank |  Gallery</title>

    <style>
        .modal-header {
            background-color: #90BCDE;
            padding:16px 16px;
            color:#FFF;
            border-bottom:2px solid #337AB7;
            height:70px;
        }

        .modal-dialog {
            width: 980px;
        }

        .fbody {
            padding-left:15px;
            padding-right:15px;
            text-align:justify;
            /*font-size:17px;*/
        }

        .fbodyLast {
            text-align:justify;
            /*font-size:17px;*/
        }

    </style>
</head>
<body>
<div class="full-container">
    <div class="top-header">
        @include('themes/eximBank/includes/header')
    </div>

    <div class="slider-container">
        <div class="inner-image">
            <img src="{{url('assets/eximBank/images/press.jpg')}}" alt="">
        </div>
    </div>
    <div class="exim-breadcrumb">
        <p><a href="#">Home</a> / <a href="#">Galleries</a> </p>
    </div>

    <div class="container inner-body">
        dfd
        <div class=" col-md-12">
            <div class="row">
                @foreach($gallery as $galleries)
                        <div class="col-lg-4">
                            <div class="thumbnail" style="border:1px solid #CCC;padding: 15px;height:250px">
                                @if( $galleries->images[1])
                                    <img src="{{url($galleries->image[1])}}" style="margin-bottom:30px" />
                                @endif
                                <p style="margin-bottom:1px"><strong><a href="{{url('single-gallery', $galleries->news_id)}}">{{$galleries->images[0]}}</a></strong></p>
                                <br>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>

<div class="exim-footer">
    @include('themes/eximBank/includes/footer')
</div>

<!-- js files -->
@include('themes/eximBank/includes/scripts')


</body>

</html>

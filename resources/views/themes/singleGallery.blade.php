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
        <p><a href="#">Home</a> / <a href="#">Gallery</a> </p>
    </div>

    <div class="container inner-body">
        <div class=" col-md-12">
            <h3>{{$name}}</h3>
            <div class="row">
                @foreach($gallery as $galleries)
                    <a data-lightbox="image"  href="{{$galleries->file_path}}">
                   <div class="col-md-2 portfolio-wrapper">
                       <img src="{{url($galleries->file_path)}}" style="width: 20%" class="thumbnail" alt="">
                   </div>
                    </a>
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

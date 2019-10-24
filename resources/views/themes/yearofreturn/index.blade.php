<!DOCTYPE HTML>
<html>
	
<head>
    @include('themes/yearofreturn/includes/head')
    <title>Year of return gh</title>
</head>
	<body>
	<div class="colorlib-loader"></div>
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
            @include('themes/yearofreturn/includes/header')
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
                    @foreach ($banners as $banner)
			   	<li style="background-image: url({{$banner->filepath}});">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<p class="meta">
												<span class="cat"><a href="#">Events</a></span>
											</p>
                                        <h1>{{$banner->bannerCaption}}</h1>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
                   </li>
                   @endforeach
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<div class="row row-pb-md">
                    @foreach($content['events'] as $event)
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="{{$event->getCategory->slug}}/{{$event->slug}}"><img src="{{$event->featuredImage}}" class="img-responsive" alt="{{$event->slug}}"></a>
							</div>
							<div class="desc">
								<p class="meta">
                                <span class="cat"><a href="{{$event->getCategory->slug}}/{{$event->slug}}">{{$event->getCategory->category}}</a></span>
									<span class="date">@if($event->date) {{$event->date}} @endif</span>
								</p>
                            <h2><a href="{{$event->getCategory->slug}}/{{$event->slug}}">{{$event->title}}</a></h2>
								<p>{{$event->brief}} </p>
							</div>
						</div>
                    </div>
                    @endforeach
					{{-- <div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="/assets/yearofreturn/img/blog-2.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Read</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div> --}}
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-slider">
								<div class="owl-carousel">
                                     @foreach($content['food'] as $event)
									<div class="item">
                                    <a href="{{$event->getCategory->slug}}/{{$event->slug}}" class="image-popup-link"><img src="{{$event->featuredImage}}" class="img-responsive" alt=""></a>
                                    </div>
                                    @endforeach
								</div>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="/tours">Tours</a></span>
								</p>
								<h2><a href="/tours">Amazing tours curated for you</a></h2>
								<p>Find a list exciting tours curated purposely for you. </p>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-md">
                    @foreach($content['events'] as $event)
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
                            <a href="{{$event->getCategory->slug}}/{{$event->slug}}"><img src="{{$event->featuredImage}}" class="img-responsive" alt=""></a>
							</div>
							<div class="desc">
                                    <p class="meta">
                                    <span class="cat"><a href="{{$event->getCategory->slug}}/{{$event->slug}}">{{$event->getCategory->category}}</a></span>
                                        <span class="date">@if($event->date) {{$event->date}} @endif</span>
                                    </p>
                                <h2><a href="{{$event->getCategory->slug}}/{{$event->slug}}">{{$event->title}}</a></h2>
                                    <p>{{$event->brief}} </p>
                                </div>
						</div>
                    </div>
                    @endforeach
				</div>
				<div class="row row-pb-md">
					<div class="col-md-8">
						<div class="blog-entry">
							<div class="blog-img">
								<div class="video colorlib-video" style="background-image: url(/assets/yearofreturn/img/blog-8.jpg);">
									<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-play"></i></a>
									<div class="overlay"></div>
								</div>
							</div>
							<div class="desc">
								
								<h2><a href="blog.html">Introductory Video</a></h2>
								<p>This is an introductory video</p>
							</div>
						</div>
                    </div>
                    @foreach($content['others'] as $event)
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
                            <a href="{{$event->getCategory->slug}}/{{$event->slug}}"><img src="{{$event->featuredImage}}" class="img-responsive" alt=""></a>
							</div>
							<div class="desc">
								<p class="meta">
                                <span class="cat"><a href="#">{{$event->getCategory->category}}</a></span>
                                <span class="date">@if($event->date) {{$event->date}} @endif</span>
								</p>
                            <h2><a href="{{$event->getCategory->slug}}/{{$event->slug}}">{{$event->title}}</a></h2>
								<p>{!!$event->brief!!} </p>
							</div>
						</div>
                    </div>
                    @endforeach
				</div>
				
			</div>
		</div>

		<div id="colorlib-instagram">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 colorlib-heading text-center">
					<h2>Instagram</h2>
				</div>
			</div>
			<div class="row">
				<div class="instagram-entry">
					<a href="#" class="instagram text-center" style="background-image: url(/assets/yearofreturn/img/gallery-1.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(/assets/yearofreturn/img/gallery-2.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(/assets/yearofreturn/img/gallery-3.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(/assets/yearofreturn/img/gallery-4.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(/assets/yearofreturn/img/gallery-5.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(/assets/yearofreturn/img/gallery-6.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(/assets/yearofreturn/img/gallery-7.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(/assets/yearofreturn/img/gallery-8.jpg);">
					</a>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo">
            @include('themes/yearofreturn/includes/footer')

		</footer>
	</div>
    @include('themes/yearofreturn/includes/script')

	</body>
</html>


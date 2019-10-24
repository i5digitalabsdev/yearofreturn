<!DOCTYPE HTML>
<html>
        <head>
            @include('themes/yearofreturn/includes/head')
            <title>Year of return gh</title>
        {{-- <meta name="description" content="{{$post->brief}}" /> --}}
            <meta name="keywords" content="" />
        
          <!-- Facebook and Twitter integration -->
            {{-- <meta property="og:title" content="{{$post->titile}}"/> --}}
        {{-- <meta property="og:image" content="{{url($post->featuredImage)}}"/> --}}
            {{-- <meta property="og:url" content=""/> --}}
            {{-- <meta property="og:site_name" content="yearofreturngh.com"/> --}}
            {{-- <meta property="og:description" content="{{$post->brief}}"/> --}}
            {{-- <meta name="twitter:title" content="{{$post->titile}}" /> --}}
            {{-- <meta name="twitter:image" content="{{url($post->featuredImage)}}" /> --}}
        {{-- <meta name="twitter:url" content="{{url($post->getCategory->slug / $post->slug)}}" /> --}}
        {{-- </head> --}}
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
            <nav class="colorlib-nav" role="navigation">
                    @include('themes/yearofreturn/includes/header')
                </nav>
		<aside id="colorlib-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12 breadcrumbs text-center">
                    <h2>{{$post->title}}</h2>
                        <p><span><a href="/">Home</a></span> / <span><a href="/{{$post->getCategory->slug}}">{{$post->getCategory->category}} </a></span> / <span>{{$post->title}}</span></p>
                       
				</div>
			</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<div class="row">
					<div class="col-md-9 content">
						<div class="row row-pb-lg">
							<div class="col-md-12">
								<div class="blog-entry">
									<div class="blog-img blog-detail">
										<img src="{{$post->featuredImage}}" class="img-responsive" alt="html5 bootstrap template">
									</div>
									<div class="desc">
										<p class="meta">
                                        <span class="cat"><a href="/{{$post->getCategory->slug}}">{{$post->getCategory->category}}</a></span>
                                        <span class="date">@if($post->date){{$post->date}}@endif</span>
										</p>
                                    <h2><a href="#">{{$post->title}}</a></h2>
                                    <h2><a href="#">@if($post->date){{$post->date}} @endif</a></h2>

                                        {!! $post->content !!}
									</div>
								</div>
							</div>
						</div>
						{{-- <div class="row row-pb-lg">
							<div class="col-md-12">
								<h2 class="heading-2">23 Comments</h2>
								<div class="review">
						   		<div class="user-img" style="background-image: url(images/person1.jpg)"></div>
						   		<div class="desc">
						   			<h4>
						   				<span class="text-left">Jacob Webb</span>
						   				<span class="text-right">24 March 2018</span>
						   			</h4>
						   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
						   			<p class="star">
					   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
						   			</p>
						   		</div>
						   	</div>
						   	<div class="review">
						   		<div class="user-img" style="background-image: url(images/person2.jpg)"></div>
						   		<div class="desc">
						   			<h4>
						   				<span class="text-left">Jacob Webb</span>
						   				<span class="text-right">24 March 2018</span>
						   			</h4>
						   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
						   			<p class="star">
					   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
						   			</p>
						   		</div>
						   	</div>
						   	<div class="review">
						   		<div class="user-img" style="background-image: url(images/person3.jpg)"></div>
						   		<div class="desc">
						   			<h4>
						   				<span class="text-left">Jacob Webb</span>
						   				<span class="text-right">24 March 2018</span>
						   			</h4>
						   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
						   			<p class="star">
					   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
						   			</p>
						   		</div>
						   	</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2 class="heading-2">Say something</h2>
								<form action="#">
									<div class="row form-group">
										<div class="col-md-6">
											<!-- <label for="fname">First Name</label> -->
											<input type="text" id="fname" class="form-control" placeholder="Your firstname">
										</div>
										<div class="col-md-6">
											<!-- <label for="lname">Last Name</label> -->
											<input type="text" id="lname" class="form-control" placeholder="Your lastname">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<!-- <label for="email">Email</label> -->
											<input type="text" id="email" class="form-control" placeholder="Your email address">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<!-- <label for="subject">Subject</label> -->
											<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<!-- <label for="message">Message</label> -->
											<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" value="Post Comment" class="btn btn-primary">
									</div>
								</form>	
							</div>
						</div> --}}
					</div>
					<div class="col-md-3">
						<div class="sidebar">
							<div class="side">
								{{-- <div class="form-group">
									<input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
									<button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
								</div> --}}
							</div>
							<div class="side">
								<h2 class="sidebar-heading">Categories</h2>
								<p>
									<ul class="category">
                                        @foreach($categories as $category )
                                    <li><a href="/{{$category->slug}}"><i class="icon-check"></i> {{$category->category}}</a></li>
                                        @endforeach
										
									</ul>
								</p>
							</div>
							<div class="side">
								{{-- <h2 class="sidebar-heading">Instagram</h2>
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
								</div> --}}
							</div>
							<div class="side">
								<div class="form-group">
									<input type="text" class="form-control form-email text-center" id="email" placeholder="Enter your email">
									<button type="submit" class="btn btn-primary btn-subscribe">Subscribe</button>
								</div>
							</div>
						</div>
					</div>
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
    @include('themes/yearofreturn/includes/script')

	</body>
</html>


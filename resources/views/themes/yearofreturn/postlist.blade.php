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

		<aside id="colorlib-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12 breadcrumbs text-center">
						<h2>{{$posts[0]->getCategory->category}}</h2>
                        <p><span><a href="/">Home</a></span> / <span>{{$posts[0]->getCategory->category}}</span></p>
                        <br>
                        @if($posts[0]->getCategory->id == 2)
                        @foreach($subcategories as $sub_category)
                            <span><span><a class="btn btn-danger btn-xs" href="/{{$posts[0]->getCategory->slug}}/subcategory/{{$sub_category->slug}}">{{$sub_category->category}}</a></span></span>
                        @endforeach
                        @endif
					</div>
				</div>
			</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<div class="row row-pb-md">
                    @foreach($posts as $post)
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
                            <a href="/{{$post->getCategory->slug}}/{{$post->slug}}"><img src="{{$post->featuredImage}}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="/{{$post->getCategory->slug}}/{{$post->slug}}">{{$post->getCategory->category}}</a></span>
                                <span class="date">@if($post->date) {{$post->date}}@endif</span>
								</p>
								<h2><a href="/{{$post->getCategory->slug}}/{{$post->slug}}">{{$post->title}}</a></h2>
								<p>{{$post->brief}} </p>
							</div>
						</div>
                    </div>
                    @endforeach
					
				</div>
            </div>
            <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="pagination">
                                {{ $posts->links() }}
                        </ul>
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


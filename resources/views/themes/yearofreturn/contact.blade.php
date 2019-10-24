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
						<h2>Contact us</h2>
						<p><span><a href="/">Home</a></span> / <span>Contact</span></p>
					</div>
				</div>
			</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="heading-2">Contact Information</h2>
						<div class="row contact-info-wrap row-pb-lg">
							<div class="col-md-3">
								<p><span><i class="icon-location-2"></i></span> No 14 Otu Adzin Rd, Spintex</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://0209105168">+233 9105168</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">yearofreturngh@gmail.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="https://yearofreturngh.com">yearofreturngh.com</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15882.026864351907!2d-0.0931987!3d5.6395646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xba4b69124ba20d65!2siSpace%20Foundation!5e0!3m2!1sen!2sgh!4v1571849149101!5m2!1sen!2sgh" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							</div>
							<div class="col-md-6">
								<h2 class="heading-2">Get In Touch</h2>
								<form action="#">
									<div class="row form-group">
										<div class="col-md-6">
											<label for="fname">First Name</label>
											<input type="text" id="fname" class="form-control" placeholder="Your firstname">
										</div>
										<div class="col-md-6">
											<label for="lname">Last Name</label>
											<input type="text" id="lname" class="form-control" placeholder="Your lastname">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<label for="email">Email</label>
											<input type="text" id="email" class="form-control" placeholder="Your email address">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<label for="subject">Subject</label>
											<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<label for="message">Message</label>
											<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary">
									</div>

								</form>	
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
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
    @include('themes/yearofreturn/includes/script')


	</body>
</html>


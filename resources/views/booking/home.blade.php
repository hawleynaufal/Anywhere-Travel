@extends('layouts.app')
@section('content')
<div id="fh5co-wrapper">
	<div id="fh5co-page">

		<!-- end:header-top -->
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/cover_bg_3.jpg')}});">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<!-- <a href="index.html" id="main-logo">Travel</a> -->
								<div class="tabulation animate-box">

									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active">
											<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
										</li>
										<li role="presentation">
											<a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hotels</a>
										</li>
										<li role="presentation">
											<a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Packages</a>
										</li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="flights">
											<div class="row">
												<div class="col-xxs-12 col-xs-6 mt">
													<div class="input-field">
														<label for="from">From:</label>
														<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<div class="input-field">
														<label for="from">To:</label>
														<input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-start">Check In:</label>
														<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-end">Check Out:</label>
														<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
													</div>
												</div>
												<div class="col-sm-12 mt">
													<section>
														<label for="class">Class:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>Economy</option>
															<option value="economy">Economy</option>
															<option value="first">First</option>
															<option value="business">Business</option>
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">Adult:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">Children:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</section>
												</div>
												<div class="col-xs-12">
													<input type="submit" class="btn btn-primary btn-block" value="Search Flight">
												</div>
											</div>
										</div>

										<div role="tabpanel" class="tab-pane" id="hotels">
											<div class="row">
												<div class="col-xxs-12 col-xs-12 mt">
													<div class="input-field">
														<label for="from">City:</label>
														<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-start">Return:</label>
														<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-end">Check Out:</label>
														<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
													</div>
												</div>
												<div class="col-sm-12 mt">
													<section>
														<label for="class">Rooms:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="economy">1</option>
															<option value="first">2</option>
															<option value="business">3</option>
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">Adult:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">Children:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</section>
												</div>
												<div class="col-xs-12">
													<input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
												</div>
											</div>
										</div>

										<div role="tabpanel" class="tab-pane" id="packages">
											<div class="row">
												<div class="col-xxs-12 col-xs-6 mt">
													<div class="input-field">
														<label for="from">City:</label>
														<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<div class="input-field">
														<label for="from">Destination:</label>
														<input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-start">Departs:</label>
														<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-end">Return:</label>
														<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
													</div>
												</div>
												<div class="col-sm-12 mt">
													<section>
														<label for="class">Rooms:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="economy">1</option>
															<option value="first">2</option>
															<option value="business">3</option>
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">Adult:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">Children:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</section>
												</div>
												<div class="col-xs-12">
													<input type="submit" class="btn btn-primary btn-block" value="Search Packages">
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									
									<h2>Exclusive Limited Time Offer</h2>
									<h3>Fly to Hong Kong via Los Angeles, USA</h3>
									<span class="price">$599</span>
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Happy Clients</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="box-testimony animate-box">
							<blockquote>
								<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
								<p>&ldquo;This App is too good for me. Design of this app is easy to see&rdquo;</p>
							</blockquote>
							<p class="author">Naufal Muhammad <span class="subtext">CEO ANYWHERE TRAVEL</span></p>
						</div>
						
					</div>
					<div class="col-md-4">
						<div class="box-testimony animate-box">
							<blockquote>
								<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
								<p>&ldquo;Dont speak Indonesian, I dont know&rdquo;</p>
							</blockquote>
							<p class="author">Yosep Sukirman <span class="subtext">Kang Becak</span></p>
						</div>
						
						
					</div>
					<div class="col-md-4">
						<div class="box-testimony animate-box">
							<blockquote>
								<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
								<p>&ldquo;Ariq lebih milih mba monde dari pada aida , trus ariq suka sama aida tapi aida ga suka&rdquo;</p>
							</blockquote>
							<p class="author">Milania Daffa   <span class="subtext">Teteh Gosip</span></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>About Travel</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top Flights Routes</h3>
							<ul>
								<li><a href="#">Manila flights</a></li>
								<li><a href="#">Dubai flights</a></li>
								<li><a href="#">Bangkok flights</a></li>
								<li><a href="#">Tokyo Flight</a></li>
								<li><a href="#">New York Flights</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top Hotels</h3>
							<ul>
								<li><a href="#">Boracay Hotel</a></li>
								<li><a href="#">Dubai Hotel</a></li>
								<li><a href="#">Singapore Hotel</a></li>
								<li><a href="#">Manila Hotel</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Interest</h3>
							<ul>
								<li><a href="#">Beaches</a></li>
								<li><a href="#">Family Travel</a></li>
								<li><a href="#">Budget Travel</a></li>
								<li><a href="#">Food &amp; Drink</a></li>
								<li><a href="#">Honeymoon and Romance</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Best Places</h3>
							<ul>
								<li><a href="#">Boracay Beach</a></li>
								<li><a href="#">Dubai</a></li>
								<li><a href="#">Singapore</a></li>
								<li><a href="#">Hongkong</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Affordable</h3>
							<ul>
								<li><a href="#">Food &amp; Drink</a></li>
								<li><a href="#">Fare Flights</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

		

	</div>
	<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->
@endsection

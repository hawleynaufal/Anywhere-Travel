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
								<div class="tabulation animate-box" style="animation-delay: 0.5s">

									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active">
											<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Booking Flights</a>
										</li>
										
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<form action="{{ route('booking.caripesawat') }}" method="get">


											<div role="tabpanel" class="tab-pane active" id="flights">
												<div class="row">

													<div class="col-xxs-12 col-xs-12 mt">
														<div class="input-field">
															<label for="from">From:</label>
															<select name="rute_from" id="" class="cs-select cs-skin-border" >
																<option value="" disabled selected>Rute to</option>
																<option value="Denpasar"> 	Denpasar</option>
																<option value="Jakarta">Jakarta</option>
																<option value="Bandung">Bandung</option>
																<option value="Jayapura">Jayapura</option>
																<option value="Pontianak">Pontianak</option>
																<option value="Palembang">Palembang</option>
																<option value="Makasar">Makasar</option>

															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xxs-12 col-xs-12 mt">
														<div class="input-field">
															<label for="from">To:</label>
															<select name="rute_to" id="" class="cs-select cs-skin-border" >
																<option value="" disabled selected>Rute to</option>
																<option value="Denpasar"> 	Denpasar</option>
																<option value="Jakarta">Jakarta</option>
																<option value="Bandung">Bandung</option>
																<option value="Jayapura">Jayapura</option>
																<option value="Pontianak">Pontianak</option>
																<option value="Palembang">Palembang</option>
																<option value="Makasar">Makasar</option>

															</select>

														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xxs-12 col-xs-12 mt alternate">
														<div class="input-field">
															<label for="date-start">Depart:</label>
															<input type="text" class="form-control" id="date-start" data-date-start-date="+1d" data-date-format="yyyy-mm-dd"

															name="depart_at" />
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xxs-12 col-xs-6 mt">
														<section>
															<label for="class">Adult:</label>
															<select name="seat" class="cs-select cs-skin-border">
																<option value="1" selected>1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</section>
													</div>
												</div>

												<div class="col-xs-12">

													{{-- <input type="submit" class="btn btn-primary btn-block mt" value="Search Flight"> --}}
													<button class="btn btn-primary btn-block mt" type="submit">
														<i class="fa fa-search"></i> Cari
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>

							</div>
							<div class="desc2 animate-box" style="animation-delay: 1.5s;">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<div style="font-size: 60px;font-family: raleway;"> 
									Anywhere you go<br>
									Go with us ~
									</div>
									
									
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	
	<footer>
		<div id="footer">
			<div class="container wow animate-box ">
				
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<p style="font-size: 16px;"><b>Contact us</b></p>
						<p class="fh5co-social-icons">
							<a href="#"><i class="icon-twitter2"></i></a>
							<a href="#"><i class="icon-facebook2"></i></a>
							<a href="#"><i class="icon-instagram"></i></a>
							<a href="#"><i class="icon-dribbble2"></i></a>
							<a href="#"><i class="icon-youtube"></i></a>
						</p>
						<p>Copyright 2016 <b style="font-size: 16px!important;">Anywhere Travel</b></p>
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

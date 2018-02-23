@extends('layouts.app')


@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay" 	style="position: fixed !important;background-repeat: no-repeat;"></div>
	<form action="{{ route('booking.storecus',$rute->id) }}?seat={{$_GET['seat']}}" method="post">
		{{ csrf_field() }}
		
		<div class="fh5co-cover" data-stellar-background-ratio="0.5" style=";background-repeat: no-repeat;height: none; ">
			<div class="container" style="padding-top: 80px;">

				<div class="row">
					<div class="container">
						<div class="col-md-8 col-md-offset-2" style="background-color: #fff;z-index: 2;padding-top: 20px;">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="flights">

									<h2><b>Reservation</b></h2>
									@for ($i = 1; $i <= $_GET['seat'] ; $i++)
									<div style="font-size: 25px;"><b>Data Customer {{$i}}</b></div>
									<div class="form-group">
										<label for="">Name</label>
										<input type="text" class="form-control" value="" name="name[]" placeholder="Masukan nama anda...">
									</div>

									<div class="form-group">
										<label for="">Address</label>
										<textarea name="address[]" id="" rows="5" class="form-control" placeholder="Masukan alamat anda..."></textarea>
									</div>
									<div class="form-group">
										<label for="">Phone</label>
										<input type="text" class="form-control" name="phone[]" placeholder="Masukan no hp anda...">
									</div>

									<div class="form-group">
										<label for="">Gender</label>
										<select name="gender[]" id="" class="form-control">
											<option value="Pria">Laki-laki</option>
											<option value="Wanita">Perempuan</option>
										</select>
									</div>
									<div class="row">
										<div class="col-xxs-12 col-xs-12">
											<label for="class">Seat Code:</label>
										</div>
									</div>
									<div class="row">
										<div class="col-xxs-12 col-xs-6 mt">
											<section>

												<select name="seathuruf[]" class="cs-select cs-skin-border">
													<option value="A" selected>A</option>
													<option value="B">B</option>
													<option value="C">C</option>
													<option value="D">D</option>
												</select>
											</section>
										</div>
										<div class="col-xxs-12 col-xs-6 mt">
											<section>
												<select name="seatangka[]" class="cs-select cs-skin-border">
													<option value="1" selected>1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</section>
										</div>
									</div>
									<div style="padding-bottom: 20px;">
										<hr>
									</div>
									@endfor
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<input type="hidden" value="{{str_random(10)}}" name="token">
			<div class="row" style="padding-top: 20px;">
				<div class="container">
					<div class="col-md-8 col-md-offset-2" style="background-color: #fff;z-index: 2;padding-top: 20px;">
						<div class="tab-content">
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Save">
							</div>
						</div>
					</div>
				</div>
			</div>

		</form>

	</div>
	@endsection
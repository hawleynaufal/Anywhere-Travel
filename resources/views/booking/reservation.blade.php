@extends('layouts.app')
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay" 	style="position: fixed !important;background-repeat: no-repeat;"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/cover_bg_3.jpg')}});background-repeat: no-repeat;height: none; ">
		<div class="container" style="padding-top: 80px;">
			<div class="row">
				<div class="col-md-8 col-md-offset-2" style="background-color: #fff;z-index: 2;padding-top: 20px;">


					<div class="tab-content">
						
						<form action="{{ route('costumer.store')}}" method="post">
							{{ csrf_field() }}
							<div role="tabpanel" class="tab-pane active" id="flights">
								<h4>{{$rute->rute_from}} - {{$rute->rute_to}}</h4>
								<h2><b>RESERVATION</b></h2>


								
									<div class="form-group">
									<label for="">Name</label>
									<input type="text" class="form-control" value="" name="name" placeholder="Masukan nama anda...">
								</div>

								<div class="form-group">
									<label for="">Address</label>
									<textarea name="address" id="" rows="5" class="form-control" placeholder="Masukan alamat anda..."></textarea>
								</div>
								<div class="form-group">
									<label for="">Phone</label>
									<input type="text" class="form-control" name="phone" placeholder="Masukan no hp anda...">
								</div>

								<div class="form-group">
									<label for="">Gender</label>
									<select name="gender" id="" class="form-control">
										<option value="Pria">Laki-laki</option>
										<option value="Wanita">Perempuan</option>
									</select>
								</div>
								
									

								<div class="form-group">
									<input type="submit" class="btn btn-primary" value="Save">
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
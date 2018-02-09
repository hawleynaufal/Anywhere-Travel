@extends('layouts.app')
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay" 	style="position: fixed !important;background-repeat: no-repeat;"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/cover_bg_3.jpg')}});background-repeat: no-repeat;height: none; ">
		<div class="container" style="padding-top: 80px;">
			<div class="row">
				<div class="col-md-8 col-md-offset-2" style="background-color: #fff;z-index: 2;padding-top: 20px;">


					<div class="tab-content">
						
						<div class="form-group">
							<label for="">Seat</label>
							<select name="gender[]" id="" class="form-control col-md-6">
								<option value="Pria">Laki-laki</option>
								<option value="Wanita">Perempuan</option>
							</select>
							<select name="gender[]" id="" class="form-control ">
								<option value="Pria">Laki-laki</option>
								<option value="Wanita">Perempuan</option>
							</select>
						</div>
						
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
@extends('layouts.app')
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay" 	style="position: fixed !important;background-repeat: no-repeat;"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/cover_bg_3.jpg')}});background-repeat: no-repeat;height: none; ">
		<div class="container" style="padding-top: 80px;">
			<div class="row">
				<div class="col-md-8 col-md-offset-2" style="background-color: #fff;z-index: 2;padding-top: 20px;">


					<div class="tab-content">
						@php
							$seat = array();
							$seatcus =array();
							foreach ($allcus as $kur ) {
								$seat[] = $kur->kursi;
							}
							foreach ($costumer as $cus ) {
								$seatcus[] -> $cus->kursi;
							}
						@endphp
						@for ($i = 0; $i <= $rute->plane->seat_qty ; $i++)
							<div class="col-md-1 col-xs-1">
								@foreach ($type as $x)
									<div class="col-md-6">
										<input required type="checkbox" name="seat[]"
										@php
											@if (in_array($x.$i, $seat)){
												echo "class='cek activecus' disabled style='display:none;'";
											}else{
												echo "class='cek activemerah' disabled style='display:none;'";
											}
											@endif
										@endphp
										value="{{$x.$i}} " disabled style="transform: scale(2);">
										<label for="seat">{{$x.$i}}</label>
									</div>
								@endforeach
							</div>
						@endfor

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
@extends('layouts.app')
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay" 	style="position: fixed !important;background-repeat: no-repeat;"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/cover_bg_3.jpg')}});background-repeat: no-repeat;height: none; ">
		<div class="container" style="padding-top: 80px;">
			<div class="row">
				<div class="col-md-8 col-md-offset-2" style="background-color: #fff;z-index: 2;padding-top: 20px;">


					<div class="tab-content">
						{{$rute->depart_at}} <br>
						{{$rute->rute_to}} <br>
						{{$rute->rute_from}} <br>
						{{$rute->transportation->description}} <br>

						{{number_format($rute->price)}} x {{$_GET['seat']}} = {{number_format($rute->price * $_GET['seat'],2)}} <br>

						<a href="{{route('booking.createcus',  $rute)}}?seat={{$_GET['seat']}}"><button class="btn btn-primary">LANJUT PEMBAYARAN</button></a>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
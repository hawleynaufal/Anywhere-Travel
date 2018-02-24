@extends('layouts.app')
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay" style="height: 135px;z-index: 0;"></div>
	<div class="fh5co-haw" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/cover_bg_3.jpg')}}">
		<div class="container" style="padding-top: 10px;">
			<div class="row" style="padding-bottom: 10px;">
				<div class="col-md-10 col-md-offset-1" style="">
					<div class="row" style="display: inline;">
						<div class="font-mont" style="font-size: 25px; font-weight:400;color:#fff;">	
							{{$_GET['rute_from']}} - {{$_GET['rute_to']}}
							<a href="{{url('/')}}" style="float: right;font-size: 16px;padding-right: 30px;padding-top: 5PX;color:#fff;">Ubah Pencarian</a>		
							
						</div>
						<div style="color:#fff;">
							<b>{{$_GET['depart_at']}}</b> | {{$_GET['seat']}} Dewasa
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1" style="background-color: #fff;z-index: 2;padding-top: 20px;">


				@foreach($rute as $rutes)
				<div class="row">
					<div class="col-md-3" style="font-size: 20px;color:#484848;">{{$rutes->transportation->description}}</div>
					<div class="col-md-2">( {{$rutes->transportation->code}} )</div>
					<div class="col-md-3">{{$rutes->rute_from}} - {{$rutes->rute_to}}</div>
					<div class="col-md-2">{{$rutes->price}}</div>
					<div class="col-md-2">
						<a href="{{route('booking.detailrute',$rutes)}}?seat={{$_GET['seat']}}"><button class="btn btn-primary">Select</button></a>
					</div>

				</div>

				<hr>

				@endforeach
				{{$rute->links()}}

			</div>
		</div>
	</div>
</div>

</div>
@endsection
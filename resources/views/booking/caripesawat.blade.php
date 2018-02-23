@extends('layouts.app')
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/cover_bg_3.jpg')}});">
		<div class="container" style="padding-top: 80px;">
			<div class="row" style="padding-bottom: 24px;">
				<div class="col-md-10 col-md-offset-1" style="background-color: #fff;z-index: 2;padding-top: 8px;">
					
					<div class="row" style="display: inline;">
						<div class="font-mont" style="font-size: 25px; font-weight:400;color:#484848;">	
							{{$_GET['rute_from']}} - {{$_GET['rute_to']}}
							<a href="{{url('/')}}" style="float: right;font-size: 16px;padding-right: 30px;padding-top: 5PX;color:#2c9c7c;">Ubah Pencarian</a>		
							
						</div>
						<div style="color:#484848;">
							<b>{{$_GET['depart_at']}}</b> | {{$_GET['seat']}} Dewasa
						</div>
					</div>
				</div>
			</div>
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
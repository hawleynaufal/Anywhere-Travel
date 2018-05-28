@extends('layouts.app')
@section('css')

<style>
body{
	background-color: #fff !important;
}
</style>
@endsection
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay" style="height: 135px;z-index: 0;"></div>
	<div class="fh5co-haw " data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/cover_bg_3.jpg')}}">
		<div class="container animate-box" style="padding-top: 10px;">
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

				<div class=" animate-box" style="animation-delay:0.25s; ;font-size: 25px;padding-bottom: 20px;">
					Hasil Pencarian
				</div> 
				<div class="animate-box" style="animation-delay: 0.5s;">
					@foreach($rute as $rutes)
					<div class="row pilihmaskapai" style="font-size: 16px;padding-top: 20px;padding-bottom: 20px">
						<div class="col-md-3" style="text-align: center; font-size: 14px"><img src="{{ asset('images/'.$rutes->transportation->image)}}" width="70" alt=""><br> {{$rutes->transportation->description}}( {{$rutes->transportation->code}} )</font> </div>

						<div class="col-md-2" style="text-align: center;">{{$rutes->rute_from}}</div>
						<div class="col-md-3" style="text-align: center;">{{$rutes->rute_to}}</div>
						<div class="col-md-2" style="text-align: right;font-weight: bold;">IDR {{$rutes->price}}</div>
						<div class="col-md-2" style="text-align: center;">
							<a href="{{route('booking.createcus',$rutes)}}?seat={{$_GET['seat']}}"><button class="btn btn-primary">Pesan</button></a>
						</div>
					</div>

					@endforeach
				</div>
				
				{{$rute->links()}}

			</div>
		</div>
	</div>
</div>

</div>
@endsection
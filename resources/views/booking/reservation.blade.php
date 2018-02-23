@extends('layouts.app')
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay" 	style="position: fixed !important;background-repeat: no-repeat;"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/cover_bg_3.jpg')}});background-repeat: no-repeat;height: none; ">
		<div class="container" style="padding-top: 80px;">
			<div class="row">
				<div class="col-md-8 col-md-offset-2" style="background-color: #fff;z-index: 2;padding-top: 20px;">





					<div class="tab-content">

						@foreach ($costumer as $costumers)
						{{$costumers->name}}<br>
						{{$costumers->rute->rute_from}}-{{$costumers->rute->rute_to}}<br>
						{{$costumers->address}}<br>
						{{$costumers->phone}}<br>
						{{$costumers->gender}} <br>
						{{$costumers->rute_id}} <br>	
 <br>	

						
						@endforeach
						
						<br>	
						<form action="{{route('storersrv',$id)}}?name={{$_GET['name']}}&token={{$_GET['token']}}" method="post">
							
							

							{{ csrf_field() }}
							<div class="col-md-2"><input name="reservation_code" value="{{str_random(7)}}"></div>
							@foreach ($costumer as $costumers)
							
							<div class="col-md-2"><input name="reservation_date" value="{{date('Y-m-d H:i:s')}}"></div>
							<div class="col-md-1"><input name="seat_code" value="{{$costumers->kursi}}"></div>
							<div class="col-md-2"><input name="depart_at" value="{{$costumers->rute->depart_at}}"></div>
							<div class="col-md-2"><input name="price" value="{{$costumers->rute->price}}"></div>
							<div class="col-md-1"><input name="user_id" value="{{Auth::id()}}"></div>
							<div class="col-md-1"><input name="costumer_id" value="{{$costumers->id}}"></div>
							@endforeach
							<input type="submit" class="btn btn-primary" value="Lanjut Pembayaran">
							
							
						</form>
						
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
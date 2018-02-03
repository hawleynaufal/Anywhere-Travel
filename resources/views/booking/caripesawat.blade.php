@extends('layouts.app')
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/cover_bg_3.jpg')}});">
		<div class="container" style="padding-top: 80px;">
			<div class="row">
				<div class="col-md-8 col-md-offset-2" style="background-color: #fff;z-index: 2;padding-top: 20px;">
					
				
				@foreach($rute as $rutes)
					
					{{$rutes->transportation->description}} ( {{$rutes->transportation->code}} )<br>
					{{$rutes->rute_from}} - {{$rutes->rute_to}}<br>
					{{$rutes->price}}<br>
					
					<button class="btn btn-primary">Select</button><br>
					<hr>
				
				@endforeach
				{{$rute->links()}}
			
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection
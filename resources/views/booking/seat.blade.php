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

						{{$costumers->name}}
						@endforeach
						<div class="customer-name">
							<table>
								@php
								$i = 0
								@endphp
								
								@foreach ($costumer as $costumers)	
								@php
								$i++
								@endphp
								
								<tr>
									<td>
										<div onclick="pget(this.id)" id="p{{$i}}" class="customer-color id-1"></div>
									</td>
									<td>
										<span>{{$costumers->name}}</span>
									</td>
									<td>
										<input id="i{{$i}}" type="text">
									</td>
								</tr>
								
								@endforeach
								
								
								
							</table>
						</div>

						<div class="seat">
							@for (	$i = 1; 	$i < 46; 	$i++)
							@if ($costumer->kursi == $i)
							<div onclick="sget(this.id)" id="{{$i}}" class="seat-id"><p>{{$i}}</p></div>
							@else
							<div onclick="sget(this.id)" id="{{$i}}" class="seat-id"><p>{{$i}}</p></div>
							@endif
							@endfor 
							
							
						</div>
						
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
@section('js')
<script>

	function pget(id){
		seat.p = id;
		$('.customer-color').removeClass("customer-selected");
		$('#'+id).addClass("customer-selected");
	}
	function sget(id){
		seat.selectSeat(id);
	}

	var seat = {
		p:'',
		pn:function(id){
			pn = id.replace('p', '');
			return pn;
		},
		selectSeat: function(id) {
			if ($('#' + id).attr('class') == 'seat-id') {

				if($('#i'+this.pn(this.p)).val() == ''){
					$('#' + id).addClass("seat-selected");
                         // console.log(this.pn(this.p));
                         $('#i'+this.pn(this.p)).val(id);
                         $('#'+id).addClass('seat-for-'+this.p);
                     }


                 } else {
                 	cSeat = $('#' + id).attr('class');
                 	cSeatoc = cSeat.replace('seat-id seat-selected seat-for-p','');
                 	$('#' + id).removeClass("seat-selected");
                 	$('#'+id).removeClass(cSeat.replace('seat-id ',''));
                 	$('#i'+cSeatoc).val(''); 


                 }
                //    console.log($('#'+id).attr('class'));
            }
        }



    </script>
    @endsection
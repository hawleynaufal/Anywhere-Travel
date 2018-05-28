@extends('layouts.app')
@section('content')
<div style="background-color: #e6eaed!important;">	
	<div class="row" style="padding-top: 30px;">
		<div class="container">

			<div class="col-md-7 col-md-offset-1" >

				<div style="">	
					<div role="tabpanel" class="tab-pane active" id="flights">
						<div class="isi-top" style="border-radius: 4px;font-size: 24px;">Pilih Kursi</div>

						
						<div style="background-color: #fff;box-shadow: rgba(27, 27, 27, 0.2) 0px 2px 4px 0px;border-radius: 4px;">
							<div style="padding-right: 30px;padding-left: 30px;padding-top: 20px;padding-bottom: 20px;margin-top: 10px;">		

								
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
											<td width="30px">
												<div onclick="pget(this.id)" id="p{{$i}}" class="customer-color id-1"></div>
											</td>
											<td width="160px">
												<label>{{$costumers->name}}</label>
											</td>
											<td>
												<form action="" method="post">
													<input id="i{{$i}}" name="i_{{$i}}" type="text" class="form-control" >
													{{ csrf_field() }}

												</td>
											</tr>
											<tr>
												<td style="font-size: 5px;">&nbsp</td>
											</tr>
											

											
											@endforeach

										</table>
									</div>
									<div class="row" style="padding-top: 20px; padding-bottom: 10px;">
										<div class="col-md-12 text-center">
											@for (	$i = 1; 	$i <= $costumers->rute->transportation->seat_qty ; 	$i++)

											@if (in_array($i,$kursi_pesan))	
											<div onclick="sget(this.id)" id="{{$i}}"  class="seat-id seat-notavailabe" disabled>{{$i}}</div>
											@else
											<div onclick="sget(this.id)" id="{{$i}}" class="seat-id">{{$i}}</div>
											@endif

											@endfor
										</div>
									</div>



									



								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" value="Lanjutkan" style="margin-top: 10px; float: right;padding-left: 20px;padding-right: 20px; margin-bottom: 50px;"">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3  " style="font-size: 14px;">
				<div style="box-shadow: rgba(27, 27, 27, 0.2) 0px 2px 4px 0px;">
					<div class="isi-top">	
						Detail Perjalanan	
					</div>
					<div class="isi-bot" >	
						<div class="row">

							<div class="col-md-6 text-center" style="padding-bottom: 8px;font-size: 16px;">
								<b>{{date('d m Y', strtotime($costumers->rute->depart_at))}} </b>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 text-center">
								<img src="{{ asset('images/'.$costumers->rute->transportation->image)}}" width="70" alt=""><br>
								( {{$costumers->rute->transportation->description}} )
							</div>	
							<div class="col-md-6 text-center">
								{{$costumers->rute->rute_to}} <br><i class="fa fa-arrows-v"></i><br>
								{{$costumers->rute->rute_from}}
							</div>
						</div>


					</div>	
				</div>
				<div style="box-shadow: rgba(27, 27, 27, 0.2) 0px 2px 4px 0px;margin-top: 30px;">
					<div class="isi-top">	
						Detail Harga
					</div>

					<div class="isi-bot-1" >	
						<div style="float: left;">{{$costumers->rute->transportation->description}}</div><div style="float: right">Rp {{number_format($costumers->rute->price)}}	</div>  <br>
						<div style="float: left;">Jumlah Pesan</div><div style="float: right;">{{$_GET['seat']}}</div> <br>	
					</div>
					<div class="isi-bot-2">	
						<div style="float: left;">Total Harga</div><div style="float: right;">Rp {{number_format($costumers->rute->price * $_GET['seat'])}}</div><br>	
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
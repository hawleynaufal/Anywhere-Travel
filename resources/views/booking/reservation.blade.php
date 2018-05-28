@extends('layouts.app')
@section('content')

<div style="background-color: #e6eaed!important;">	
	<div class="row" style="padding-top: 30px;">
		<div class="container">

			<div class="col-md-7 col-md-offset-1" >

				
				<div role="tabpanel" class="tab-pane active" id="flights">
					<div style="background-color: #fff;box-shadow: rgba(27, 27, 27, 0.2) 0px 2px 4px 0px;border-radius: 4px;">
						<div style="padding-right: 30px;padding-left: 30px;padding-top: 20px;padding-bottom: 20px;margin-top: 0px;">	
							<div style="font-size: 20px;">Detail Penumpang</div>
							<hr class="garis">
							@php
							$i = 0
							@endphp
							@foreach ($costumer as $costumers)
							@php
							$i++
							@endphp
							<div class="row" style="padding-bottom: 10px;">	
								<div class="col-md-4">
									<b>Penumpang {{$i}}</b>
								</div>
								<div class="col-md-8">
									
									<div class="row">	
										<div class="col-md-3">Nama<span style="float: right">:</span>	</div>
										<div class="col-md-8">	
											@if ($costumers->gender == 'Pria')
											Mr. {{$costumers->name}} <br>	
											@else
											Mrs. {{$costumers->name}} <br>	
											@endif
										</div>
									</div>
									<div class="row">	
										<div class="col-md-3">Alamat <span style="float: right">:</span>	</div>
										<div class="col-md-8">	
											{{$costumers->address}}
										</div>
									</div>
									<div class="row">	
										<div class="col-md-3">No Hp<span style="float: right">:</span>	</div>
										<div class="col-md-8">	
											{{$costumers->phone}}
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>

				</div>
				<div style="background-color: #fff;box-shadow: rgba(27, 27, 27, 0.2) 0px 2px 4px 0px;border-radius: 4px;">
					<div style="padding-right: 30px;padding-left: 30px;padding-top: 20px;padding-bottom: 20px;margin-top: 10px;">	
						<div style="font-size: 20px;">Detail Harga</div>
						<hr class="garis">
						<b>Total Harga</b> <span style="float: right">Rp {{number_format($costumers->rute->price * $_GET['seat'])}}</span>
					</div>
				</div>
				<form action="{{ url()->current()}}/payment?token={{$_GET['token']}}&rsv_cd={{$_GET['token']}}" method="post">



					{{ csrf_field() }}
					<div class="col-md-2"><input type="hidden" name="reservation_code" value="{{str_random(7)}}"></div>
					@foreach ($costumer as $costumers)

					<div class="col-md-2"><input type="hidden" name="reservation_date" value="{{date('Y-m-d H:i:s')}}"></div>
					<div class="col-md-1"><input type="hidden" name="seat_code" value="{{$costumers->kursi}}"></div>
					<div class="col-md-2"><input type="hidden" name="depart_at" value="{{$costumers->rute->depart_at}}"></div>
					<div class="col-md-2"><input type="hidden" name="price" value="{{$costumers->rute->price}}"></div>
					<div class="col-md-1"><input type="hidden" name="user_id" value="{{Auth::id()}}"></div>
					<div class="col-md-1"><input type="hidden" name="costumer_id" value="{{$costumers->id}}"></div>
					@endforeach
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Lanjut Pembayaran" style="margin-top:-10px; float: right;padding-left: 20px;padding-right: 20px; margin-bottom: 50px;">
					</div>


				</form>
				
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
				
			</div>
		</div>
	</div>
</div>

@endsection
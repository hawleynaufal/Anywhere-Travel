@extends('layouts.app')
@section('css')
<style>	
.wow label{
	display: none;
	position: absolute;
	top: 0px;
	width: auto;
	min-height: 330px;

	padding: 2em 1em;
	font-family: 'Nunito', sans-serif;
	font-size: 14pt;
	font-weight: lighter;


}
.wow:hover label.team-caption{
	display:block;
	-moz-transition: opacity 1s ease-in !important;
	-o-transition: opacity 1s ease-in !important;
	transition: opacity 1s ease-in !important;

}
</style>
@endsection
@section('content')

<div style="background-color: #e6eaed!important;">	
	<div class="row" style="padding-top: 30px;">
		<div class="container">
			
			<div class="col-md-7 col-md-offset-1" >

				

				<div style="background-color: #fff;box-shadow: rgba(27, 27, 27, 0.2) 0px 2px 4px 0px;border-radius: 4px;">
					<div style="padding-right: 30px;padding-left: 30px;padding-top: 20px;padding-bottom: 20px;margin-top: 0px;">	
						<div style="font-size: 20px;">Kode Booking</div>
						<hr class="garis">
						<div class="text-center">	
							<div style="display: inline-block;background-color: #2c9c7c;font-size: 20px;color: #fff;">{{$_GET['rsv_cd']}}</div>

						</div>

					</div>
				</div>
				<div style="background-color: #fff;box-shadow: rgba(27, 27, 27, 0.2) 0px 2px 4px 0px;border-radius: 4px;">
						<div style="padding-right: 30px;padding-left: 30px;padding-top: 20px;padding-bottom: 20px;margin-top: 10px;">	
							<div style="font-size: 20px;">Status Pembayaran</div>
							<hr class="garis">
							<div class="text-center">	
								@php
									$count = 1;
								@endphp
								@foreach($reservation as $x)
									@if ($x->status == 0)
										Bayar sit
									@else
									Lunas
									@endif

									@php
										if(++$count >= 1) break;
									@endphp
								@endforeach
							</div>
							
						</div>
					</div>
				
				<div style="background-color: #fff;box-shadow: rgba(27, 27, 27, 0.2) 0px 2px 4px 0px;border-radius: 4px;">
					<div style="padding-right: 30px;padding-left: 30px;padding-top: 20px;padding-bottom: 20px;margin-top: 10px;">	
						<div style="font-size: 20px;">Detail Penumpang</div>
						<hr class="garis">
						@php
						$i = 0
						@endphp
						@foreach ($customer as $cus)

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
										@if ($cus->gender == 'Pria')
										Mr. {{$cus->name}} <br>	
										@else
										Mrs. {{$cus->name}} <br>	
										@endif
									</div>
								</div>
								<div class="row">	
									<div class="col-md-3">Alamat <span style="float: right">:</span>	</div>
									<div class="col-md-8">	
										{{$cus->address}}
									</div>
								</div>
								<div class="row">	
									<div class="col-md-3">No Hp<span style="float: right">:</span>	</div>
									<div class="col-md-8">	
										{{$cus->phone}}
									</div>
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>
				<div class="form-group">
					<a href="">
						<button type="submit" class="btn btn-primary" style="margin-top: 10px; float: right;padding-left: 20px;padding-right: 20px; margin-bottom: 50px;">Lanjutkan</button>
					</a>
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
								<b>{{date('d m Y', strtotime($rute->depart_at))}} </b>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 text-center">
								<img src="{{ asset('images/'.$rute->transportation->image)}}" width="70" alt=""><br>
								( {{$rute->transportation->description}} )
							</div>	
							<div class="col-md-6 text-center">
								{{$rute->rute_to}} <br><i class="fa fa-arrows-v"></i><br>
								{{$rute->rute_from}}
							</div>
						</div>
					</div>
				</div>

				<div style="box-shadow: rgba(27, 27, 27, 0.2) 0px 2px 4px 0px;margin-top: 20px;">
					<div class="isi-top">	
						Bukti Pembayaran	
					</div>
					<div class="isi-bot" >
						<form method="post" action="{{ url()->current()}}/stp2?token={{$_GET['token']}}&rsv_cd={{$_GET['token']}}" enctype="multipart/form-data">
							<div class="form-group">
								<label>Pilih Bukti Pembayaran :</label>
								<input type="file" name="image" id="file"></input>
							</div>
							{{ csrf_field() }}
							<input type="submit" class="btn btn-primary" value="Kirim" style="">

						</form>
					</div>		
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
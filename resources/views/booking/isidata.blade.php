@extends('layouts.app')


@section('content')

<form action="{{ route('booking.storecus',$rute->id) }}?seat={{$_GET['seat']}}" method="post">
	{{ csrf_field() }}
	<div style="background-color: #e6eaed!important;">	
		<div class="row" style="padding-top: 30px;">
			<div class="container animate-box" style="animation-duration: 1.2s;">

				<div class="col-md-7 col-md-offset-1" >

					<div style="">	
						<div role="tabpanel" class="tab-pane active" id="flights">
							<div class="isi-top" style="border-radius: 4px;font-size: 24px;box-shadow: rgba(27, 27, 27, 0.2) 0px 2px 4px 0px;" >Isi Detail Penumpang</div>
							
							@for ($i = 1; $i <= $_GET['seat'] ; $i++)
							<div style="background-color: #fff;box-shadow: rgba(27, 27, 27, 0.2) 0px 2px 4px 0px;border-radius: 4px;">
								<div style="padding-right: 30px;padding-left: 30px;padding-top: 20px;padding-bottom: 20px;margin-top: 10px;">		
									
									<div style="font-size: 20px;">Detail Penumpang {{$i}} </div>
									<hr class="garis">
									<div class="row">	
										<div class="col-md-8" >	
											<div class="form-group">
												<label for="">Name</label>
												<input type="text" class="form-control" value="" name="name[]" >
												<div style="font-size: 14px;color: #bbbaba">Sesuai dengan KTP / SIM / Kartu Pelajar</div>
											</div>
										</div>
										<div class="col-md-4">	
											<div class="form-group">
												<label for="">Gender</label><br>
												<select name="gender[]" id="" class="form-control">
													<option value="Pria">Laki-laki</option>
													<option value="Wanita">Perempuan</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">	
										<div class="col-md-8">	
											<div class="form-group">
												<label for="">Address</label>
												<textarea name="address[]" id="" rows="5" class="form-control" ></textarea>
												<div style="font-size: 14px;color: #bbbaba">Sesuai dengan KTP / SIM / Kartu Pelajar</div>
											</div>
										</div>
										<div class="col-md-4">	
											<div class="form-group">
												<label for="">Phone</label>
												<input type="text" class="form-control" name="phone[]" >
												<div style="font-size: 14px;color: #bbbaba">e.g. 085647653342</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endfor
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Lanjutkan" style="margin-top: 10px; float: right;padding-left: 20px;padding-right: 20px; margin-bottom: 50px;">
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
					<div style="box-shadow: rgba(27, 27, 27, 0.2) 0px 2px 4px 0px;margin-top: 30px;">
						<div class="isi-top">	
							Detail Harga
						</div>

						<div class="isi-bot-1" >	
							<div style="float: left;">{{$rute->transportation->description}}</div><div style="float: right">Rp {{number_format($rute->price)}}	</div>  <br>
							<div style="float: left;">Jumlah Pesan</div><div style="float: right;">{{$_GET['seat']}}</div> <br>	
						</div>
						<div class="isi-bot-2">	
							<div style="float: left;">Total Harga</div><div style="float: right;">Rp {{number_format($rute->price * $_GET['seat'])}}</div><br>	
						</div>
					</div>
				</div>
			</div>
		</div>

		<input type="hidden" value="{{str_random(10)}}" name="token">
	</div>
	

</form>


@endsection
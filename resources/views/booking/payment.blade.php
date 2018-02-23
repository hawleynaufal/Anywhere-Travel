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
<div class="fh5co-hero">
	<div class="fh5co-overlay" 	style="position: fixed !important;background-repeat: no-repeat;"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/cover_bg_3.jpg')}});background-repeat: no-repeat;height: none; ">
		<div class="container" style="padding-top: 80px;">
			<div class="row">
				<div class="col-md-8 col-md-offset-2" style="background-color: #fff;z-index: 2;padding-top: 20px;">


					<div class="tab-content">
						<h2>PILIH BANK</h2>
						<div class="row">	
							<div class="col-md-4"><div class="wow">
								<h3>BCA</h3>
								<label class="team-caption">No rek : 808080808</label>
							</div>	</div>
							<div class="col-md-4"><div class="wow">
								<h3>MANDIRI</h3>
								<label class="team-caption">No rek : 808080808</label>
							</div>	</div>
							<div class="col-md-4">	<div class="wow">
								<h3>DANAMON</h3>
								<label class="team-caption">No rek : 808080808</label>
							</div></div>
						</div>
						

						

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
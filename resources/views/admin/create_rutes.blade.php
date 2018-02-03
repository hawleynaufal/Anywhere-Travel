@extends('layouts.app')
@section('content')
<div class="container">
	
	<form action="{{ route('costumer.rutesetor')}}" method="post">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="from">From:</label><br>
			<select name="rute_from" id="" class="cs-select cs-skin-border" >
				<option value="" disabled selected>Rute to</option>
				<option value="Denpasar"> 	Denpasar</option>
				<option value="Jakarta">Jakarta</option>
				<option value="Bandung">Bandung</option>
				<option value="Jayapura">Jayapura</option>
				<option value="Pontianak">Pontianak</option>
				<option value="Palembang">Palembang</option>
				<option value="Makasar">Makasar</option>

			</select>
		</div>
		
		
		<div class="form-group">
			<label for="from">To:</label><br>
			<select name="rute_to" id="" class="cs-select cs-skin-border" >
				<option value="" disabled selected>Rute to</option>
				<option value="Denpasar"> 	Denpasar</option>
				<option value="Jakarta">Jakarta</option>
				<option value="Bandung">Bandung</option>
				<option value="Jayapura">Jayapura</option>
				<option value="Pontianak">Pontianak</option>
				<option value="Palembang">Palembang</option>
				<option value="Makasar">Makasar</option>

			</select>
		</div>
		


		<div class="form-group">
			<label for="date-start">Depart:</label><br>
			<input type="text" class="form-control" id="date-start" data-date-format="yyyy-mm-dd"
			placeholder="yyyy-mm-dd"
			name="depart_at" />
		</div>

		<div class="form-group">
			<label >Price:</label><br>
			<input type="text" class="form-control"
			name="price" placeholder="Masukan harga.." />
		</div>

		<div class="form-group">
			<label for="">Maskapai:</label>
			<select name="transportation_id" id="" class="form-control">
				@foreach($transportation as $transportations)
				<option value="{{$transportations->id}}">{{ $transportations->description }}</option>
				@endforeach
			</select>
		</div>


		<div class="form-group">
			<input type="submit" class="btn btn-primary btn-block mt" value="Save">
		</div>
		



	</form>
</div>
@endsection
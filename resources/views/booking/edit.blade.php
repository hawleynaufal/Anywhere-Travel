@extends('layouts.app')
@section('content')
<div class="container">
	<form action="{{ route('costumer.update', $costumer)}}" method="post">
		{{ csrf_field() }}
		{{method_field('PATCH')}}
		
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" name="name" value="{{$costumer->name}}">
		</div>
	
	<div class="form-group">
		<label for="">Address</label>
		<textarea name="address" id="" rows="5" class="form-control" placeholder="Masukan alamat anda...">{{$costumer->address}}</textarea>
	</div>
	<div class="form-group">
		<label for="">Phone</label>
		<input type="text" class="form-control" name="phone" value="{{$costumer->phone}}">
	</div>

	<div class="form-group">
		<label for="">Gender</label>
		<select name="gender" id="" class="form-control" >
			
			<option value="Pria">Laki-laki</option>
			<option value="Wanita">Perempuan</option>
		</select>
	</div>	

	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Save">
	</div>

</form>
</div>
@endsection
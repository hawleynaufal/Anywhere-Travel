@extends('layouts.app')
@section('content')
<div class="container">
	
	<form action="{{ route('costumer.store')}}" method="post">
		{{ csrf_field() }}

		
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" value="{{Auth::User()->name}}" name="name" placeholder="Masukan nama anda...">
		</div>
		
		<div class="form-group">
			<label for="">Address</label>
			<textarea name="address" id="" rows="5" class="form-control" placeholder="Masukan alamat anda..."></textarea>
		</div>
		<div class="form-group">
			<label for="">Phone</label>
			<input type="text" class="form-control" name="phone" placeholder="Masukan no hp anda...">
		</div>

		<div class="form-group">
			<label for="">Gender</label>
			<select name="gender" id="" class="form-control">
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
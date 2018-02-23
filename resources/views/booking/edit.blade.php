@extends('layouts.app')
@section('content')
<div class="container">
	<form action="{{ route('admin.ruteupdate', $rute->id)}}" method="post">
		{{ csrf_field() }}
		{{method_field('PATCH')}}
		
		

	</form>
</div>
@endsection
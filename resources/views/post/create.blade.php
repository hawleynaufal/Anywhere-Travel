@extends('layouts.app')
@section('content')
	<div class="container">
		<form action="{{ route('post.store')}}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="">title</label>
				<input type="text" class="form-control" name="title" placeholder="Post title">
			</div>

			<div class="form-group">
				<label for="">Category</label>
				<select name="category_id" id="" class="form-control">
					@foreach($categories as $category)
					<option value="{{$category->id}}">{{ $category->name }}</option>
					@endforeach
				</select>
				
			</div>
			<div class="form-group">
				<label for="">content</label>
				<textarea name="content" id="" rows="5" class="form-control" placeholder="Post content"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Save">
			</div>
			
		</form>
	</div>
@endsection
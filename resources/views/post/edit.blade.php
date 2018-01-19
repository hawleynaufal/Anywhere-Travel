@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-offset-2">
			<form action="{{ route('post.update', $post )}}" method="post">
				{{ csrf_field()}}
				{{method_field('PATCH')}}
				<div class="form-group">
					<label for="">title</label>
					<input type="text" class="form-control" value="{{ $post->title}}" name="title" placeholder="Post title">
				</div>

				<div class="form-group">
					<label for="">Category</label>
					<select name="category_id" id="" class="form-control">
						@foreach($categories as $category)
						<option 
							value="{{$category->id}}"
							@if ($category->id === $post->category_id)
								selected 
							@endif
						>{{ $category->name }}</option>
						@endforeach
					</select>

				</div>
				<div class="form-group">
					<label for="">content</label>
					<textarea name="content" id="" rows="5" class="form-control" 	placeholder="Post content">{{$post->content}}</textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Save">
				</div>

			</form>
		</div>
	</div>
</div>
@endsection
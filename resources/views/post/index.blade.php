@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@foreach($posts as $post)
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="{{route('post.show',$post)}}">{{ $post->title }}</a>
					<div class="pull-right">
						<form action="{{route('post.destroy',$post)}}" method="post">
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<button type="submit" class="btn btn-danger btn-xs">hapus</button>
						</form>

						<a href="{{route('post.edit',$post)}}">
							<button type="submit" class="btn btn-primary btn-xs">edit</button>
						</a>
						


					</div>
				</div>

				<div class="panel-body">
					{{str_limit($post->content,100,'....')}} 
				</div>

			</div>
			@endforeach
			{{ $posts->links()}}
		</div>
	</div>

</div>
@endsection 
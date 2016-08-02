@extends('layouts.app')

@section('header')
	<div class="page-header">
		<h1>Posts <small>list of elements</small></h1>
	</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			@foreach ($posts as $post)
				<div class="media">
					<div class="media-left">
						<a href="{!! action('PostController@detail', $post->id) !!}">
							<img class="media-object" src="{!! $post->img_src !!}">
						</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">{{$post->name}}</h4>
						<div>{{$post->description}}</div>
						<div><small>{{$post->published_at}}</small></div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
	<!-- pagination -->
	<div class="row">
		<div class="col-md-12">
			{{ $posts->render() }}
		</div>
	</div>
@endsection
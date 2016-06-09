@extends('layouts.app')

@section('header')
	<div class="page-header">
		<h1>Posts <small>list of elements</small></h1>
	</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<p><span class="glyphicon glyphicon-sort-by-order"></span></p>
			<table class="table">
				<tr>
					<td>ID</td>
					<td>NAME</td>
					<td>DESCRIPTION</td>
					<td>CONTENT</td>
					<td>ACTIVE</td>
					<td>PUBLISHED_AT</td>
					<td>CREATED_AT</td>
					<td>UPDATED_AT</td>
				</tr>
				@foreach ($posts as $post)
					<tr>
						<td>{{$post->id}}</td>
						<td><a href="{{ action('PostController@detail', $post->id) }}">{{$post->name}}</a></td>
						<td>{{$post->description}}</td>
						<td>{{$post->content}}</td>
						<td>{{$post->active}}</td>
						<td>{{$post->published_at}}</td>
						<td>{{$post->created_at}}</td>
						<td>{{$post->updated_at}}</td>
					</tr>
				@endforeach
			</table>
		</div>		
	</div>
	<!-- pagination -->
	<div class="row">
		<div class="col-md-12">
			{{ $posts->render() }}
		</div>
	</div>
@endsection
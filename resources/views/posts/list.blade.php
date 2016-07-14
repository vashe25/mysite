@extends('layouts.app')

@section('header')
	<div class="page-header">
		<h1>Posts <small>list of elements</small></h1>
	</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-success" href="{!! action('PostController@add') !!}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<tr>
					<td>ID</td>
					<td>NAME</td>
					<td>DESCRIPTION</td>
					<td>ACTIVE</td>
					<td>PUBLISHED_AT</td>
					<td>DELETE</td>
				</tr>
				@foreach ($posts as $post)
					<tr>
						<td>{{$post->id}}</td>
						<td><a href="{!! action('PostController@detail', $post->id) !!}">{{$post->name}}</a></td>
						<td>{{$post->description}}</td>
						<td>{{$post->active}}</td>
						<td>{{$post->published_at}}</td>
						<td>
							<a class="btn btn-danger" href="{!! action('PostController@delete', $post->id) !!}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
						</td>
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
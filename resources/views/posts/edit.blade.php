@extends('layouts.app')

@section('header')
	<div class="page-header">
		<h1>Post: {{ $post->name or "New Post" }} <small>edit page</small></h1>
	</div>
@endsection

@section('content')
	@if (count($errors) > 0)
		<div class="row">
			<div class="col-md-12">
				@foreach($errors->all() as $error)
					<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> <strong>Error:</strong> {{ $error }}</div>
				@endforeach
			</div>
		</div>
	@endif
	<form action="{!! action('PostController@update', isset($post->id) ? $post->id : 0) !!}" id="editPost" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="row">
			<div class="col-md-2">ID</div>
			<div class="col-md-10">{{ $post->id or 0 }}</div>
		</div>
		<div class="row">
			<div class="col-md-2">NAME</div>
			<div class="col-md-10">
				<input class="form-control" type="text" name="name" value="{{ $post->name or NULL }}">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">DESCRIPTION</div>
			<div class="col-md-10">
				<textarea class="form-control" rows="5" name="description">{{ $post->description or NULL }}</textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">CONTENT</div>
			<div class="col-md-10">
				<textarea class="form-control" rows="10" name="content">{{ $post->content or NULL }}</textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">PUBLISHED AT</div>
			<div class="col-md-10">
				<input class="form-control" type="datetime" name="published_at" value="{{ $post->published_at or NULL }}">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">ACTIVE</div>
			<div class="col-md-10">
				<input class="form-control" type="number" name="active" min="0" max="1" value="{{ $post->active or 0 }}">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">CREATED AT</div>
			<div class="col-md-10">
				{{ $post->created_at or NULL }}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">UPDATED AT</div>
			<div class="col-md-10">
				{{ $post->updated_at or NULL }}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<a class="btn btn-default" href="{!! action('PostController@index') !!}"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> List</a>
			</div>
			<div class="col-md-10">

				<button class="btn btn-primary" type="submit" form="editPost"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Save</button>
			</div>
		</div>
	</form>
@endsection
@extends('layouts.app')

@section('header')
	<div class="page-header">
		<h1>Post: {{ $post->name }} <small>edit page</small></h1>
	</div>
@endsection

@section('content')
	<form action="{!! action('PostController@update', ['id' => $post->id]) !!}" id="editPost" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="row">
			<div class="col-md-2">ID</div>
			<div class="col-md-10">{{ $post->id }}</div>
		</div>
		<div class="row">
			<div class="col-md-2">NAME</div>
			<div class="col-md-10">
				<input class="form-control" type="text" name="name" value="{{ $post->name }}">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">DESCRIPTION</div>
			<div class="col-md-10">
				<textarea class="form-control" rows="5" name="description">{{ $post->description }}</textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">CONTENT</div>
			<div class="col-md-10">
				<textarea class="form-control" rows="10" name="content">{{ $post->content }}</textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">PUBLISHED AT</div>
			<div class="col-md-10">
				<input class="form-control" type="datetime" name="published_at" value="{{ $post->published_at }}">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">ACTIVE</div>
			<div class="col-md-10">
				<input class="form-control" type="number" name="active" min="0" max="1" value="{{ $post->active }}">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">CREATED AT</div>
			<div class="col-md-10">
				{{ $post->created_at }}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">UPDATED AT</div>
			<div class="col-md-10">
				{{ $post->updated_at }}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<a class="btn btn-default" href="{!! action('PostController@index') !!}">Back to list</a>
			</div>
			<div class="col-md-10">
				<input class="btn btn-primary" type="submit" value="Save changes" form="editPost">
			</div>
		</div>
	</form>
@endsection
@extends('layouts.app')

@section('header')
	<div class="page-header">
		<h1>Post: {{ $post->name }} <small>detail page</small></h1>
	</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-2">ID</div>
		<div class="col-md-10">{{ $post->id }}</div>
	</div>
	<div class="row">
		<div class="col-md-2">DESCRIPTION</div>
		<div class="col-md-10">{{ $post->description }}</div>
	</div>
	<div class="row">
		<div class="col-md-2">CONTENT</div>
		<div class="col-md-10">{{ $post->content }}</div>
	</div>
	<div class="row">
		<div class="col-md-2">PUBLISHED AT</div>
		<div class="col-md-10">{{ $post->published_at }}</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<a class="btn btn-default" href="{!! action('PostController@index') !!}">Back to list</a>
		</div>
		<div class="col-md-10">
			<a class="btn btn-primary" href="{!! action('PostController@edit', ['id' => $post->id]) !!}">Edit this Post</a>
		</div>
	</div>
@endsection
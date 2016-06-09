@extends('layouts.app')

@section('header')
	<div class="page-header">
		<h1>Post: {{ $post->name }} <small>detail page</small></h1>
	</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-4">ID</div>
		<div class="col-md-8">{{ $post->id }}</div>
	</div>
	<div class="row">
		<div class="col-md-4">DESCRIPTION</div>
		<div class="col-md-8">{{ $post->description }}</div>
	</div>
	<div class="row">
		<div class="col-md-4">CONTENT</div>
		<div class="col-md-8">{{ $post->content }}</div>
	</div>
	<div class="row">
		<div class="col-md-4">PUBLISHED AT</div>
		<div class="col-md-8">{{ $post->published_at }}</div>
	</div>
	<div class="row">
		<div class="col-md-12"><a href="{{ $link }}">Back to Posts list</a></div>
	</div>
@endsection
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
					<td>id</td>
					<td>name</td>
					<td>desription</td>
					<td>content</td>
					<td>active</td>
					<td>published_at</td>
					<td>created_at</td>
					<td>updated_at</td>
				</tr>
				@foreach ($posts as $post)
					<tr>
						<td>{{$post->id}}</td>
						<td>{{$post->name}}</td>
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
@endsection
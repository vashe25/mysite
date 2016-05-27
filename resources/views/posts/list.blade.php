@extends('layouts.app')

@section('content')
	<p>Posts table:</p>
	<table border="1">
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
@endsection
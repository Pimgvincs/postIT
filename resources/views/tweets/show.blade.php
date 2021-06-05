@extends('layouts.main')

@section('main')
	<h1>{{ $tweet->text }}</h1>
	@if ( Auth::id() == $tweet->user->id)
		<a href="/tweets/{{ $tweet->id }}/edit">edit tweet</a> 
		<form action="/tweets/{{ $tweet->id }}" method="POST">
			@csrf
			@method('DELETE')
			<button>Delete tweet</button>
		</form>
	@endif
	<form action="/comments?tweetid={{ $tweet ->id }}" method="POST">
		@csrf
		@if (Auth::check())
		<label for="comment" > Add Comment</label>
		<input type="text" name="text" id="comment">
		<button>Add Comment</button>
		@endif
		@error('text')
		    <div>{{ $message }}</div>
		@enderror
	</form> 

	@foreach ($tweet->comments as $comment)
		<div>
			<hr>
			<p>-- {{ $comment->user->name}} --</p>
			<p>{{ $comment->text}}</p>
			<hr>
		</div>

	@endforeach
@endsection 
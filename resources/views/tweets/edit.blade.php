@extends('layouts.main')

@section('main')
	<h1>Edit tweet</h1>

	<form action="/tweets/{{ $tweet->id }}" method="POST">
		@csrf 
		@method('PUT')

		<div>
			<label for='tweet-text'>What do u want to change about tweet(max 25 characters) ?</label>
		</div>
		<div>
			<input maxlength="25" name="text" id="tweet-text" type="text" value="{{ $tweet->text }}">
			@if ($errors->has('text'))
				@foreach ($errors->get('text') as $message)
				<pre>{{ $message }}</pre>
				@endforeach
			@endif
		</div>
		<div>
			<button>Edit tweet</button>
		</div>
	</form>
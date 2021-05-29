@extends('layouts.main')

@section('main')
	<h1>Add a tweet</h1>

	<form action="/tweets" method="POST">
		@csrf
		<div>
			<label for='tweet-text'>What do u want to tweet or write about(max 25 characters) ?</label>
		</div>
		<div>
			<textarea maxlength="25" name="text" id="tweet-text"></textarea>
			@if($errors->has('text'))
				@foreach ($errors->get('text') as $message)
				<pre>{{ $message }}</pre>
				@endforeach
			@endif
		</div>
		<div>
			<button>Ad tweet</button>
		</div>
	</form>
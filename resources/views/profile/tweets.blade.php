@extends('layouts.main')

@section('main')
	<h1>Tweets</h1>
	<main>
		<form action="{{ route('search') }}" method="GET">
		    <input type="text" name="search" required/>
		    <button type="submit">Search</button>
		</form>
		
			@foreach ($tweets as $tweet)
				<section>
					@if ( Auth::id() == $tweet->user->id)
						<hr>
						<header>
							{{ $tweet->name}}
						</header>
						<div>
							<a href="/tweets/{{ $tweet->id }}">
								{{$tweet->text}}
							</a>
						</div>
						<hr>
					@endif
				</section>
			@endforeach
			
	</main>
@endsection
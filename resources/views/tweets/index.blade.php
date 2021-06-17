@extends('layouts.main')

@section('main')
	<h1>Tweets</h1>
	<main>
		<form action="{{ route('search') }}" method="GET">
		    <input type="text" name="search" required/>
		    <button type="submit">Search</button>
		</form>
		<div class="row">

        	<div class="col-md-8">
				@foreach ($tweets as $tweet)
					<section>
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
					</section>
				@endforeach
			</div>
		</div>
			
	</main>
@endsection

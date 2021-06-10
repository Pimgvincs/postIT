@extends('layouts.main')

@section('main')
	<h1>Profile</h1>
	@if(Auth::check())
		@if(Auth::user()->role_id == 1)
			<h1>Users</h1>
			@foreach ($users as $user)
			<section>
				<hr>
				<header>
					<p>{{ $user->name}}</p>
				</header>
				<div>
					<p>{{$user->email}}</p>
				</div>
				<hr>
			</section>
			@endforeach
		@endif
		<div class="border-right pl-3">
	    <p class="mt-1"> {{ Auth::user()->name }}</p>
	    <p> {{ Auth::user()->email }}  </P>
	    </div>
	        	
		<div class="bg-dark mb-2 pb-2">
			@foreach ($tweets as $tweet)
			<section>
				<hr>
				<header>
					<p>{{ $tweet->name}}</p>
					@foreach ($tweet->comments as $comment)</div>
						<div class="bg-dark">
							<hr>
							<p class="text-info ">-- {{ $comment->user->name}} --</p>
							<p class="  text-light ml-2">{{ $comment->text}}</p>
							<hr>
						</div>
					@endforeach
				</header>
			</section>
			@endforeach
		</div>
	@else
		<div class="border-right pl-3">
        <p class="mt-1"> Guest</p>
       
      	<p> Guest@.test  </P>
    
	    <hr style="width:100% " class="h-100 bg-success">
	    </div> 
	@endif
	
@endsection
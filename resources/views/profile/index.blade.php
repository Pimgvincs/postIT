@extends('layouts.main')

@section('main')
	<h1>Profile</h1>

	@if(Auth::check())
		<div class="border-right pl-3">
        <p class="mt-1"> {{ Auth::user()->name }}</p>
      	<p> {{ Auth::user()->email }}  </P>
        </div>
        <div>
	    <a href="/users/{{Auth::user()->id}}/edit">edit user information</a>
        </div> <!-- edit users information -->
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
	@else
		<div class="border-right pl-3">
        <p class="mt-1"> Guest</p>
       
      	<p> Guest@.test  </P>
    
	    <hr style="width:100% " class="h-100 bg-success">
	    </div> 
	@endif

@endsection

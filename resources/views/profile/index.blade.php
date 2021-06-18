@extends('layouts.main')

@section('main')
<body class="bg-dark">
	<h1 class="mt-1 text-info">Profile</h1>

	@if(Auth::check())
		<div class="border-right pl-3">
        <p class="mt-1 text-light"> {{ Auth::user()->name }}</p>
      	<p class="mt-1 text-light"> {{ Auth::user()->email }}  </P>
        </div>
        <div class="text-decoration-none  mt-1 pl-1" >
	    <a href="/users/{{Auth::user()->id}}/edit">edit user information</a>
        </div> <!-- edit users information -->
		@if(Auth::user()->role_id == 1)
			<h1 class="mt-1 text-success">Users</h1>
			@foreach ($users as $user)
			<section class="ml-2">
				<div >
				<hr>
				<div class="border border-success ml-2 p-2">
				<header>
					<p class="mt-1 text-light">{{ $user->name}}</p>
				</header>
				<div >
					<p 	class="mt-1 text-light">{{$user->email}}</p>
				</div>
				</div>
				
				</div>
			</section>
			@endforeach
	@endif
	@else
		<div class="border border-success ml-2 p-2 col-2">
		
	    <hr style="width:100% " class="h-100 bg-success">

        <p  class="mt-1 text-light text-center h5"> Guest</p>
       
      	<p  class="mt-1 text-light text-center h5" > Guest@.test  </P>
    
	    <hr style="width:100% " class="h-100 bg-success">
	    </div> 
	@endif
</body>
@endsection
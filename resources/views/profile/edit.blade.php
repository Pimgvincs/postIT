@extends('layouts.main')

@section('main')
<body class="bg-dark">
<h1 class="h1 text-center text-primary" ><b>Edit user information</b></h1>

	<form action="/profile/{{ Auth::user()->id }}" method="PUT">
		@csrf 
		@method('POST')

                   <div accesskey=""class="text-center mt-5 h4 text-success">
			<label for='user-name' >What do u want to change about your name?</label>
		</div>
		<div class="text-center">
                    
			<input class="border border-success text-center w-25 h-20 " maxlength="25" name="name" id="user-name" type="text" value="{{ Auth::user()->name}}">
			@if ($errors->has('text'))
				@foreach ($errors->get('text') as $message)
				<pre>{{ $message }}</pre>
				@endforeach
			@endif
		</div>

		<div accesskey=""class="text-center mt-5 h4 text-success">
		<label for='user-email' >What do u want to change about your email?</label>
		<div class="text-center ">
				<input class="border border-success text-center w-25 h-20 " maxlength="25" name="email" id="user-email" type="text" value="{{ Auth::user()->email}}">
			@if ($errors->has('text'))
				@foreach ($errors->get('text') as $message)
				<pre>{{ $message }}</pre>
				@endforeach
			@endif
		</div>

			<button class="bg-success mt-3">Edit tweet</button>
		</div>
	</form>
        
</body>
@endsection
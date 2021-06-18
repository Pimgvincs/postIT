@extends('layouts.main')

@section('main')
<body class="bg-dark">
	<h1 class="h1 text-center text-success mt-2">Edit tweet</h1>

	<form action="/tweets/{{ $tweet->id }}" method="POST">
		@csrf 
		@method('PUT')

                <div accesskey=""class="text-center mt-5 h4 text-success">
			<label for='tweet-text' >What do u want to change about tweet(max 25 characters) ?</label>
		</div>
		<div class="text-center">
                    
			<input class="border border-success text-center w-25 h-20 " maxlength="25" name="text" id="tweet-text" type="text" value="{{ $tweet->text }}">
			@if ($errors->has('text'))
				@foreach ($errors->get('text') as $message)
				<pre class="text-danger">{{ $message }}</pre>
				@endforeach
			@endif
		</div>
		<div class="text-center ">
			<button class="bg-success mt-3">Edit tweet</button>
		</div>
	</form>
        
</body>
@endsection
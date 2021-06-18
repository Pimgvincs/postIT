@extends('layouts.main')

@section('main')
<body class="bg-dark">
<h1 class="h1 text-center text-primary" ><b>Add a tweet</b></h1>

	<form action="/tweets" method="POST"> 
            
		@csrf
                <div class="text-center mt-5 h4 text-primary">
			<label for='tweet-text'>What do u want to tweet or write about(max 25 characters) ?</label>
		</div>
                <div class="text-center">
			<textarea maxlength="25" name="text" id="tweet-text" class="border border-success text-center w-50 h-75 "></textarea>
			@if($errors->has('text'))
				@foreach ($errors->get('text') as $message)
				<pre class="text-danger">{{ $message }}</pre>
				@endforeach
			@endif
		</div>
		<div class="text-center ">
                    
                    <button class="bg-primary mt-3">Add tweet</button>
		</div>
	</form>
</body>
@endsection
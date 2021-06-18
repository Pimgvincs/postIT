@extends('layouts.main')

@section('main')
<body class="bg-dark">
    <h1> <p class="text-info ml-2 text-info mt-2">{{ $tweet->text }}</p></h1>
    @if (Auth::check())
		@if ( Auth::id() == $tweet->user->id) 
	        <div class="bg-dark mb-2 pb-2">
	            <a href="/tweets/{{ $tweet->id }}/edit" class="border bg-success text-dark ml-3 pr-2 pl-2 border-success float-right mt-3 mr-5 border-success">edit tweet</a> 
			<form action="/tweets/{{ $tweet->id }}" method="POST">
				@csrf
				@method('DELETE')
	                        
	            <button class="text-right text-dark bg-success float-right  mt-3 mr-5">Delete tweet</button>
			</form>
	        </div>
		@elseif (Auth::user()->role_id == 1)
			<form action="/tweets/{{ $tweet->id }}" method="POST">
				@csrf
				@method('DELETE')
	            <button class="text-right text-dark bg-success float-right  mt-3 mr-5">Delete tweet</button>
			</form>
	    @endif
	        <div>
		<form action="/comments?tweetid={{ $tweet ->id }}" method="POST" >
			@csrf
	                <label for="comment"  class="text-light border border-success p-1"><button class="bg-success">Add Comment</button></label>
			<input type="text" name="text" id="comment">	
			@error('text')
			    <div class="text-danger ml-1"> !  {{ $message }}</div>
			@enderror
		</form> 
	    </div>
		<div>
		@foreach ($tweet->comments as $comment)</div>
	        <div class="bg-dark">
				<hr>
	                 <p class="text-info ">-- {{ $comment->user->name}} --</p>
	                 <p class="  text-light ml-2">{{ $comment->text}}</p>
				<hr>
		</div>
		@endforeach
	@elseif(!Auth::check())
		@foreach ($tweet->comments as $comment)</div>
	        <div class="bg-dark">
				<hr>
	                 <p class="text-info ">-- {{ $comment->user->name}} --</p>
	                 <p class="  text-light ml-2">{{ $comment->text}}</p>
				<hr>
		</div>
		@endforeach
	@endif
@endsection 
</body>
show.blade.php
2 KB
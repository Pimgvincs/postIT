@extends('layouts.main')

@section('main')
<body class="bg-dark">
	<h1 class="text-success h1 display-3" >Tweets</h1>
	<main>
		<form action="{{ route('search') }}" method="GET">
		    <input type="text" name="search" required/>
		    <button type="submit">Search</button>
		</form>
	
          <hr class="bg-success">
			@foreach ($tweets as $tweet)
				<div class="mt-3 mb-3 col-5 border border-success border-2" > 
        <div class=" row " style="display:inline-block" >
			<div  class=" row  "  >
					
						<header class=" col-10 text-light mr-2 h4  ">
							~{{ $tweet->name}}
						</header>
						
						<div class=" col-10 h4  text-break" >
						 <a href="/tweets/{{ $tweet->id }}">
								{{$tweet->text}}
							</a> 
						</div >
							
			</div>
			</div>
			</div>
			@endforeach
			
			
	</main>
	</body>
@endsection
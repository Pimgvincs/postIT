@extends('layouts.main')



@section('main')
<body class="bg-dark">
    <div class="row">

        <div class="col-md-7">

            @if($tweets->isNotEmpty())
                @foreach ($tweets as $tweet)
                    <section >
                        <div class="border border-info mt-2 ml-1 mb-1 col-6" style="display:inline-block" >
                        <hr class="bg-info">
                        <header class="text-light ">
                            ~{{ $tweet->user->name}}
                           <div > {{ $tweet->name}} </div>
                        </header>
                        <div class="h4 font-weight-bold mt-2 mb-2 pl-2 text-break">
                            <a href="/tweets/{{ $tweet->id }}">
                                {{$tweet->text}}
                            </a>
                        </div>
                        <hr class="bg-info">
                    </div>
                    </section>
                @endforeach
            @else 
                <div>
                    <h2>No tweets found</h2>
                </div>
            @endif

        </div>
    </div>
</body>
@endsection
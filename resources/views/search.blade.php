@extends('layouts.main')



@section('main')
    <div class="row">

        <div class="col-md-8">

            @if($tweets->isNotEmpty())
                @foreach ($tweets as $tweet)
                    <section>
                        <hr>
                        <header>
                            {{ $tweet->user->name}}
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
            @else 
                <div>
                    <h2>No tweets found</h2>
                </div>
            @endif

        </div>
    </div>
@endsection
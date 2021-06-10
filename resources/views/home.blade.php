@extends('layouts.app')

@section('content')
<body class="bg-dark">
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-success">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-success">{{ __('You are logged in!') }} <div class="spinner-border text-success ml-5"></div> </div> 
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection

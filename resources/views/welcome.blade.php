@extends('layouts.main')

@section('main')
<body class="bg-dark">
       
    
    
<div class="row ">
    <div class="col-sm-1  "> </div> <div class="m-lg-3 col-sm-1 text-success"><h1 class=" display-3" >Tweets</h1> </div>

     <div class="container"> 
        <div class="row">
            <div class="col-md-12">
  <a  class="float-right" href="{{ route('profile') }}" >Profils</a>

   <div class="row">
       <div class="col-sm-1"> </div> <div class="m-lg-3 col-sm-2"><p class="h4 text-light">To see the tweets:<button type="button" class="btn btn-success"><a href="/tweets" class=" text-dark mt-4">tweets </a></button></p></div>
</div>
    
</body>

@endsection
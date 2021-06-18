@extends('layouts.main')

@section('main')
<body class="bg-dark">
 

      
       <div class="col-md-12 h5 pt-2 mr-2">
      <a  class="float-right border-primary border bg-dark" href="/profile/4" method="POST" >Profils</a>
  
    
<div class="row ">
    <div class="col-sm-1  "> </div> <div class="m-lg-3 col-sm-2  text-success"><h1 class=" display-3" >Tweets</h1> </div>

        </div>
        <div class="row ml-2">
            <div class="col-sm-1"> </div> <div class="m-lg-3 col-sm-2 "><p class="h4 text-light">To see the tweets:<button type="button" class="btn btn-success">
            <a href="/tweets" class=" text-dark mt-4">tweets </a></button></p>
        </div>

    
</body>

@endsection
<script>
function bgcolor()
{
    class="bg-info";
}

</script>
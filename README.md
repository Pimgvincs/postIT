# postIT
 Uni work
 As a visitor, I want to see a list of tweets [DONE] resent comments [DONE]
 As a tweeter, I want to send a tweet [DONE]
 As a visitor, I want to see comments on a tweet [DONE]
 As a tweeter, I want to add a comment to a tweet [DONE]
 As a tweeter, I want to update my tweet in case I mispelled it [DONE]
 As a tweeter, I want to delete my tweet [DONE]

As a tweeter, Follow, unfolow, (https://codeplaners.com/laravel-8-follow-unfollow-example/)
As a tweeter block other users,
As a tweeter make Public or private profile
[none of this]


ALL search [DONE] and see posts 
   admin and user who created post , can Delete posts, [DONE]
    ban users.[nop]


Make profile views for all users
        but guests cant edit 
        private or public [not]

In admins profile all posts
        all auth users [Done]
        can delete users( not admins) [not done]

In users profile all posts they have made
            can edit his/her profile(information) [almost tikai nestradā route]


in welcome.blade 
<button data-toggle="collapse" data-target="#demo" class="float-right  bg-success mr-3"  >Profils</button>
  
    <div id="demo" class="collapse float-right text-right text-light col-md-12 pl-3">
         @if ( Auth::check()) 
        <div class="border-right pl-3">
        <p class="mt-1"> {{ Auth::user()->name }}</p>
       
      <p> {{ Auth::user()->email }}  </P>
        </div>
      @else
       <div class="border-right pl-3">
        <p class="mt-1"> Guest</p>
       
      <p> Guest@.test  </P>
        </div>
      @endif
      </div>
            </div>
    </div>
        </div>
    <hr style="width:100% " class="h-100 bg-success">
    </div> 


    <div class="border-right pl-3">
        <p class="mt-1"> {{ Auth::user()->name }}</p>
        <p> {{ Auth::user()->email }}  </P>
        </div>
                
        <div class="bg-dark mb-2 pb-2">
            @foreach ($tweets as $tweet)
            <section>
                <hr>
                <header>
                    <p>{{ $tweet->name}}</p>
                    @foreach ($tweet->comments as $comment)</div>
                        <div class="bg-dark">
                            <hr>
                            <p class="text-info ">-- {{ $comment->user->name}} --</p>
                            <p class="  text-light ml-2">{{ $comment->text}}</p>
                            <hr>
                        </div>
                    @endforeach
                </header>
            </section>
            @endforeach
        </div>
<?php

?>

<div class="jumbotron" style="background-image: url(); background-size: 100%;">
    
    {{-- <div align="right" style="color:green">
        @if(Route::has('login'))

        @auth
        <h4><span><b><i>Welcome:</i></b></span>&nbsp;&nbsp;&nbsp;{{auth()->user()->name}}</h4>
        @endauth
        @endif
    </div> --}}
    <h1 class="display-4">HOME PAGE!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <div align="center">
        @if(Route::has('login'))
        @auth
        @else

        <a class="btn btn-secondary btn-lg" href="{{url('/login')}}" role="button">Login</a>
        <a class="btn btn-secondary btn-lg" href="{{url('/register')}}" role="button">Register</a>
        @endauth
        @endif
    </div>
  </div>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      @include('layouts.navbar')
      
    

      <div class="container">
         
        <div class="container-fluit">
      
          <div>
            @if(Route::has('login'))
    
            @auth
            <h4  class="auth" style="float: right; margin-right:15px; color:green;"><span><b><i>Welcome:</i></b></span>&nbsp;&nbsp;&nbsp;{{auth()->user()->name}}</h4>
            @endauth
            @endif
       </div>
    


      </div>
      
      @yield('content')

    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>

  <style>
 
 .table th,td {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
  }

  #btn, input[type=submit]:hover {
      background-color: #45a049;
  }

  #btn, input[type=submit] {
      background-color: white; 
      border-color:green;
      color:green; 
      /* width: 50%; */
      height: 20%;
  }

  .bigwarapper{
    /* background-image: url(public/images/ppp.png) */
    background-color: rgba(182, 176, 176, 0.103);
      opacity:90% ; 
  }


  </style>
</html>

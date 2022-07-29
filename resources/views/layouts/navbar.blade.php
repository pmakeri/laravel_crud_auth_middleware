<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/home')}}">Home</a>
        </li>
        
       @if(Route::has('login'))
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{url('/list')}}">List</a>
        </li>
       
        <li class="nav-item">
          <a href="{{url('/form')}}" class="nav-link">Add</a>
        </li>

        <li class="nav-item">
          <a href="{{url('/about')}}" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a href="{{url('/contact')}}" class="nav-link">Contact Us</a>
        </li>
       
        @else
          <li class="nav-item">
            <a href="{{url('/about')}}" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="{{url('/contact')}}" class="nav-link">Contact Us</a>
          </li>
        @endauth
       @endif


      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>


      
    </div>


    @if (Route::has('login'))
      @Auth
    <div class="dropdown" style="margin-left:5px; margin-right:5px;">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
       
       {{Auth::user()->name}}
      </button>
     
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li>
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" value="Log Out">
          </form>

        </li>
        
      </ul>
    </div>

    @else

    <ul class="navbar navbar-light" style="margin: 5px;">
      <li class="nav-item">
        <button type="button"><a href="{{url('/login')}}" class="nav-link">Login</a></button>
      </li>
      
      @if(Route::has('register'))
        <li class="nav-item">
          <button type="button"> <a href="{{url('/register')}}" class="nav-link" >Register</a></button>
        
        </li>
       @endif
    </ul>
   





   @endauth
  @endif
</nav>




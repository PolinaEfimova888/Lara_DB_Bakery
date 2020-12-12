<header>

<nav class="navbar navbar-light bg-light">

  <a class="navbar-brand">
    <img src="https://img.icons8.com/plasticine/2x/jingle-bell.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">

    <a class="navbar-brand" href="{{ url('/') }}">
                Bakery_DB
                </a> 
    <div class="relative flex items-top justify-center  sm:items-center sm:pt-0">
            @if (Route::has('login'))              
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
            @endif
     
    </div> 
     
  </a>
</nav>

</header>
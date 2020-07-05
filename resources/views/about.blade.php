
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Training Group Website</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

       
     <!-- Styles

        <link type="text/css" rel="stylesheet" href="https://cdn.phpjabbers.com/css/main.min.css?v=1.0.85" media="all" />
     -->  <link rel="stylesheet" href="{{URL::asset('css/app.css')}}" media="all" />
      <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" media="all" />  
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/about') }}">About</a>
                    @else
                    <a href="{{ url('/') }}">Home</a>
                        <a href="{{ route('login') }}">Login</a>
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    <a href="{{ url('/admin/login') }}">Login as supervisor</a>

                </div>
            @endif

            <div class="content">
            <a class="navbar-brand" href="{{ url('/') }}">
             <img src="{{ url('/image/site-logo.png') }}" alt="site logo" height="100" width="200">
                </a>
                <div class="title m-b-md">
                Students Executios 
                </div>
                
                <h3>Huzaifa AlAhmad</h3>
                <h3>Ahmed AlEnizy</h3>
                <h3>Faisal Bahashwan</h3>
                <h3>Turki Alotaibi</h3>
                <h3>Abdulrahman Almohanna</h3>
            </div>
        </div>
    </body>
</html>



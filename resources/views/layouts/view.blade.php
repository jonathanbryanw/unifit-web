<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/view-style.css')}}">
    @yield('css') 

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    @yield('js') 

    <header class="border-bottom bg-white">
        <div class="nav-container">   
            <ul class="nav">
                <li><a href="{{ url('/') }}" class="nav-link logo">Uni<span style="color:#81D98F">Fit</span></a></li>
                <li><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
                <li><a href="{{ url('/program') }}" class="nav-link">Find Program</a></li>
                <li><a href="{{ url('/connect') }}" class="nav-link">Trainer Connect</a></li>
                <li><a href="" class="nav-link">Workouts</a></li>
                <li><a href="" class="nav-link last">Diet</a></li>
                
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}" class="nav-link login">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}" class="nav-link login">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="nav-link login">Register</a></li>
                        @endif
                    @endauth
                @endif
            </ul>        
        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        <ul class="footer-ul">
            <li><a href="{{ url('/') }}" class="nav-link logo" style="display: inline;">Uni<span style="color:#81D98F">Fit</span></a></li>
            <li><a href="{{ url('/about') }}" class="nav-link" style="display: inline;">About Us</a></li>
            <li><a href="{{ url('/program') }}" class="nav-link" style="display: inline;">Find Program</a></li>
            <li><a href="{{ url('/connect') }}" class="nav-link" style="display: inline;">Trainer Connect</a></li>
            <li><a href="" class="nav-link" style="display: inline;">Workouts</a></li>
            <li><a href="" class="nav-link" style="display: inline;">Diet</a></li>
            <li><p class="copy">Unifit 2023</p></li>
        </ul> 
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Employees and Companies</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><b>Manage Employees and Companies</b></a>
        <ul class="navbar-nav ml-auto">

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-link">Dashboard</a>

                        <a href="{{ url('/user') }}" class="btn btn-link">Register</a>
   
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>

                    
                </li>
                       
                    @endauth
                </div>
            @endif

        </ul>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
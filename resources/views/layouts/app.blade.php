<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <script src="{{ asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand text-dark" href="#">Posty</a>
          <button class="navbar-toggler bg-dark " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse col-6" id="navbarNav">
            <ul class="navbar-nav d-flex items-center">
              <li class="nav-item">
                <a class="nav-link active fw-bolder text-dark" aria-current="page" href="{{ route('posts')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bolder text-dark" href="{{ route('dashboard')}}">dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bolder text-dark" href="{{ route('posts') }}">post</a>
              </li>
            </ul>
            <div class="container"></div>
            <ul class="navbar-nav align-content-end">
                @auth
                    <li class="nav-item">
                      <a class="nav-link fw-bolder text-dark ">hello</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder text-dark inline" aria-current="page" href="#">{{ auth()->user()->name}}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ asset('logout')}}" method="POST">
                          @csrf
                          <button type="submit" class="text-dark btn btn-link text-decoration-none fw-bolder">logout</button>
                        </form>
                        
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link fw-bolder text-dark" href="{{ route('login')}}">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder text-dark" href="{{ route('register')}}">register</a>
                    </li>
                @endguest
                
                
                
                
                
              </ul>
          </div>
        </div>
      </nav>
    @yield('content')
</body>
</html>
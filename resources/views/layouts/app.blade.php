<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse col-6" id="navbarNav">
            <ul class="navbar-nav d-flex items-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ asset('posts')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('dashboard')}}">dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">post</a>
              </li>
            </ul>
            <div class="container"></div>
            <ul class="navbar-nav navbar-collapse align-content-end">
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">jayber</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">logout</a>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('login')}}">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('register')}}">register</a>
                    </li>
                @endguest
                
                
                
                
                
              </ul>
          </div>
        </div>
      </nav>
    @yield('content')
</body>
</html>
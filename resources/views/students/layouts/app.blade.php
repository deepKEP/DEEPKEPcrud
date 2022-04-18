<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
                font-family: 'Nunito', sans-serif;
            }
      .gradient-button{
        background-image: linear-gradient(to right, #007BB8, #003E5C);
        color: white;
        border: none;
      }
    </style>
</head>
<body>
    <header>
        <nav class="navbar-dark bg-dark">
            <ul class="navbar justify-content-start ">
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{route('index')}}">STUDENT LIST</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{route('create')}}">ADD</a>
                </li>
              </ul>
        </nav>
        
    </header>
    @yield('content')
</body>
</html>
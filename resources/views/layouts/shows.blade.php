<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="../../resources/css/shows.css">
    <title>Сделай тайтл</title>
</head>
<body>
<header>
    <div class="container-fluid ">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="{{route('product.index')}}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('product.smartphone')}}">SMARTPHONES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('product.phone')}}">PHONES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('product.tablet')}}">TABLETS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('product.smartwatch')}}" >SMARTWATCHES</a>
            </li>
        </ul>
    </div>
</header>
@yield('content')
</body>
</html>

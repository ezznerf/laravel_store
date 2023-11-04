<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="../resources/css/items.css">
    <title>STORE</title>

</head>
<body>
<header>

    <div class="container-fluid " style="background-color: #F08080; height: 3rem">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-black" href="{{route('product.index')}}"><strong>ГЛАВНАЯ</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="{{route('product.smartphone')}}" ><strong>СМАРТФОНЫ</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="{{route('product.phone')}}"><strong>ТЕЛЕФОНЫ</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="{{route('product.tablet')}}"><strong>ПЛАНШЕТЫ</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="{{route('product.smartwatch')}}" ><strong>СМРАРТ-ЧАСЫ</strong></a>
            </li>
            <li>
                <a class="nav-link text-black" href="{{route('basket.index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                        <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z"/>
                    </svg></a>
            </li>

        </ul>

    </div>

</header>
    <div class="position-relative" style="top: 0.750rem">
        @yield('content')
    </div>
</body>
</html>

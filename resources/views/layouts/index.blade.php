<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">




    <style>
        header{
            font-family: 'Permanent Marker', cursive;
        }

    </style>
    <title>STORE</title>

</head>


<body style="background-size:100%; background-color:#DCDCDC">
<header class="text-center" style="background-color: #F08080; height: 2.8rem;">
    <h1 style="font-family: 'Bungee Shade', sans-serif;"><strong>ZNERF_STORE</strong></h1>
</header>

@yield('content')

<footer class="text-center text-lg-start bg-light text-muted fixed-bottom">
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Copyright:<strong class="text-danger">Znerf</strong> <br> Created for Alena Aleksandrovna
    </div>

</footer>
</body>
</html>

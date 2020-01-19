<!DOCTYPE html>
<body lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="{{asset('css/styl.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('head')

    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon/">

    <meta name="description" content="Zamów pizze nie wychodząc z domu"/>
    <meta name="keywords" content= "pizza,zamówienie,jedzenie"/>

</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('homes')}}">Nasza strona</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="{{route('pizzerialist')}}">Wybór pizzerii</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Konto użytkownika
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Mój profil</a>
                    <a class="dropdown-item" href="#">Moje zamówienia</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Wyloguj</a>
                </div>
            </li>

            <li>
                <a class="nav-link" href="#">Zaloguj</a>
            </li>
            <li class="nav-item nav-right">
                <a class="nav-link" href="#">Zarejestruj</a>
            </li>
    </div>
</nav>
<div class="container">
@yield('content')



<footer>
    <p class="text-center">&copy; 2020 PIZZA BEST AND THE BEST</p>
</footer>
</div>
@yield('scripts')
</body>


</html>

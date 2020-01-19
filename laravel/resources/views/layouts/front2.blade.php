<!DOCTYPE html>
<body lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Generator Pizzy</title>
    <link rel="stylesheet" href="{{asset('css/styl.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">

      
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('head')

    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon/">

    <meta name="description" content="Zamów pizze nie wychodząc z domu"/>
    <meta name="keywords" content= "pizza,zamówienie,jedzenie"/>
 
   
<style>
body,
html {
    font: normal normal normal 100%/1.4 tahoma, sans-serif;
    background: #f9f9f9;
    color: #000
}

body {
    font-size: .8em
}

[data-draggable=target] {
    float: left;
    list-style-type: none;
    width: 100%;
    height: 50vh;
    overflow-y: auto;
    margin: 0 .5em .5em 0;
    padding: .5em;
    border: 2px solid #888;
    border-radius: .2em;
    background: #ddd;
    color: #555
}

[data-draggable=target][aria-dropeffect=move] {
    border-color: #68b;
    background: #fff
}

[data-draggable=target][aria-dropeffect=move].dragover,
[data-draggable=target][aria-dropeffect=move]:focus {
    outline: 0;
    box-shadow: 0 0 0 1px #fff, 0 0 0 3px #68b
}

[data-draggable=item] {
    display: block;
    list-style-type: none;
    margin: 0 0 2px 0;
    padding: .2em .4em;
    border-radius: .2em;
    line-height: 1.3;
    text-align: center;
}

[data-draggable=item]:focus {
    outline: 0;
    box-shadow: 0 0 0 2px #68b, inset 0 0 0 1px #ddd
}

[data-draggable=item][aria-grabbed=true] {
    background: #8ad;
    color: #fff
}     </style> 
    

 
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>


 
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

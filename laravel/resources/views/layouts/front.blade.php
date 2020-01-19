<!DOCTYPE html>
<body lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('head')

    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon/">

    <meta name="description" content="Zamów pizze nie wychodząc z domu"/>
    <meta name="keywords" content= "pizza,zamówienie,jedzenie"/>

</head>
@yield('content')



<footer>
    <p class="text-center">&copy; 2020 PIZZA BEST AND THE BEST</p>
</footer>
@yield('scripts')
</body>


</html>

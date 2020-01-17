<!DOCTYPE html>
<body lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('head')

    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon/">

    <meta name="description" content="Zamów pizze nie wychodząc z domu"/>
    <meta name="keywords" content= "pizza,zamówienie,jedzenie"/>

</head>
<body>
@yield('content')



<footer>
    <p class="text-center">&copy; 2020 PIZZA BEST AND THE BEST</p>
</footer>
@yield('scripts')
</body>


</html>

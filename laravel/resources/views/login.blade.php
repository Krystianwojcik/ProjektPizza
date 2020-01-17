<!DOCTYPE html>
<html>
<head>
	<title>Formularz logowania</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pizza.pl</title>
    <link rel="stylesheet" href="{{asset('css/stylelogowania.css')}}" type="text/css"/>

    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon/">

	<meta name="description" content="Zamów pizze nie wychodząc z domu"/>
	<meta name="keywords" content= "pizza,zamówienie,jedzenie"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
</head>

	<div class="container">
		<img src="{{asset('img/logo2.png')}}" alt="logo">
		<form id="login">
			<div class="header">
				<h3>Zaloguj się</h3>
				<p>Wypełnij poniższe pola by się zalogować.</p>
			</div>
			<div class="inputs">
				<input type="login" placeholder="Login" autofocus />
				<input type="hasło" placeholder="Hasło" />
			</div>
			<a href="#" class="button">Zaloguj się</a>


		</form>
	</div>
</html>

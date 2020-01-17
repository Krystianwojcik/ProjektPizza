@extends('layouts.front')
@section('head')
    <link rel="stylesheet" href="{{asset('css/stylerejestracji.css')}}" type="text/css"/>
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon/">
@endsection

@section('content')
    <body>
	<div class="container">
		<img src="{{asset('img/logo2.png')}}" alt="logo">
		<form id="login">
			<div class="header">
				<h3>Zarejestruj się</h3>
				<p>Wypełnij poniższe pola by się zarejestrować.</p>
			</div>
			<div class="inputs">
				<input type="login" placeholder="Login" autofocus />
				<input type="hasło" placeholder="Hasło" />
			</div>
			<a href="#" class="button">Załóż konto</a>
		</form>
	</div>
@endsection

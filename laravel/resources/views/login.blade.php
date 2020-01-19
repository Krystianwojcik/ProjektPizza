@extends('layouts.front')
@section('head')
    <link rel="stylesheet" href="{{asset('css/stylelogowania.css')}}" type="text/css"/>
    @endsection
   @section('content')
       <body>
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
@endsection

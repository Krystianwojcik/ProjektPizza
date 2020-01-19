@extends('layouts.front')
@section('head')
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/stylekreatora.css')}}">
@endsection
@section('content')
<body>
	<div id="wrapper">
		<header>
			<div style="text-align:center;">
			<img src="{{asset('img/logo1.png')}}" alt="logo"/>
			</div>
		</header>

		<nav>
			<div style="text-align":center;><h1> Kreator pizzy</h1>
			</div>
		</nav>

		<section>
				<div id="creator">
					<div id="table">
						<table>
							<tr>
								<td align="center" colspan="3"><p1>Rodzaje ciasta</p1></td>
							</tr>

							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td>
								<td colspan="2"><p>grube</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td>
								<td colspan="2"><p>średnie</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td>
							<td colspan="2"><p>cienkie</p></td>
							</tr>
							<tr>
							<td align="center" colspan="3"><p1>Składniki</p1></td>
							</tr>

							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/bacon.png')}}" alt="bacon"/></td> <td><p>bekon</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/cheese.png')}}" alt="cheese"/></td><td><p>ser</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/chili pepper.png')}}" alt="chili pepper"/></td><td><p>papryka peperoni</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/cucumber.png')}}" alt="cucumber"/> </td><td><p>ogórek</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/ham.png')}}" alt="ham"/></td><td><p>szynka</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/mushroom.png')}}" alt="mushroom"/> </td><td><p>pieczarki</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/olives.png')}}" alt="oliives"/> </td><td><p>oliwki</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/onion.png')}}" alt="onion"/> </td><td><p>cebula</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/pepper.png')}}" alt="pepper"/></td><td><p>papryka</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/pineapple.png')}}" alt="pineapple"/> </td><td><p>ananas</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/sausage.png')}}" alt="sausage"/></td><td><p>salami</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/tomato.png')}}" alt="tomato"/> </td><td><p>pomidor</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/broccoli.png')}}" alt="broccoli"/> </td><td><p>brokuł</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td><td><img src="{{asset('img/corn.png')}}" alt="corn"/> </td><td>	<p>kukurydza</p></td>
							</tr>

							<tr>
								<td align="center" colspan="3"><p1>Sosy</p1></td>
							</tr>

							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td>
								<td colspan="2"><p>czosnkowy</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td>
								<td colspan="2"><p>pomidorowy</p></td>
							</tr>
							<tr>
								<td><div class="wybierz">
								<input name="cecky" id="checky" value="1" type="checkbox"/>
								</div></td>
								<td colspan="2"><p>tabasco</p></td>
							</tr>
					</div>
						<div id="heading"><h2 class="h2">Wybierasz składniki i masz – Twoja własna pizza właśnie ląduje w piecu.</h2><img class="im" src="img/cook1.png" alt="pizza"/><a id="submit" href="#">Zamów</a>
						</div>
				</div>
			</div>
		 </section>

	</div>
@endsection

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pizza.pl</title>
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,700|Mukta:500,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="./src/js/scrollreveal.min.js"></script>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon/">

	<meta name="description" content="Zamów pizze nie wychodząc z domu"/>
	<meta name="keywords" content= "pizza,zamówienie,jedzenie"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
</head>
<body class="is-boxed has-animations">

    <div class="body-wrap boxed-container">
		<header>
			<img src="{{asset('img/logo0.png')}}" alt="logo" class="img-fluid"/>
		</header>
			<nav>
			<a class="menu active" href="#">Strona główna</a><a class="menu" href="{{route('register')}}">Załóż konto</a><a class="menu" href="{{route('login')}}">Zaloguj się</a><a class="menu" href="#">Kontakt</a>
			</nav>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                            <h1 class="hero-title h2-mobile mt-0 is-revealing">Wybierasz składniki i masz – Twoja własna pizza właśnie ląduje w piecu.</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features section text-center">
                <div class="section-square"></div>
                <div class="container">
                    <div class="features-inner section-inner">
                        <div class="features-wrap">
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-1-a">
                                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#007DFF" offset="100%"/>
                                                </linearGradient>
                                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-1-b">
                                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#FF4F7A" offset="100%"/>
                                                </linearGradient>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <img src="{{asset('img/pizza.selection.jpg')}}" alt="selection pizza"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="feature-title h3-mobile">Skomponuj własną pizzę</h4>
										<a id= "submit" href="{{route('creator')}}">Dalej</a>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-2-a">
                                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#007DFF" offset="100%"/>
                                                </linearGradient>
                                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-2-b">
                                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#FF4F7A" offset="100%"/>
                                                </linearGradient>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <img src="{{asset('img/address.jpg')}}" alt="address"/>
                                            </g>
                                        </svg>

                                    </div>
                                    <h4 class="feature-title h3-mobile">Wybierz restaurację</h4>
                                    <a id= "submit" href="{{route('pizzerialist')}}">Dalej</a>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-3-a">
                                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#007DFF" offset="100%"/>
                                                </linearGradient>
                                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-3-b">
                                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#FF4F7A" offset="100%"/>
                                                </linearGradient>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                             <img src="{{asset('img/supply.jpg')}}" alt="supply"/>
                                            </g>
                                        </svg>

                                    </div>
                                    <h4 class="feature-title h3-mobile">Zapłać i czekaj na dostawę</h4>
                                    <a id= "submit" href="#">Dalej</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
		© 2020 pizza.pl
		</footer>

    </div>

    <script src="dist/js/main.min.js"></script>
</body>
</html>

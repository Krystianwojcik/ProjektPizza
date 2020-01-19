@extends('layouts.front')
@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="./src/js/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
@endsection
@section('content')
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
										<a id= "submit" href="{{route('creator-pizzy')}}">Dalej</a>
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


    </div>
    @endsection
    @section('scripts')
    <script src="dist/js/main.min.js"></script>
    @endsection



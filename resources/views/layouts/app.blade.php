<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Parma</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
        <header class="header">
            <nav class="container header__menu">
                <ul>
                    <li>
                        <a href="#">SOMOS</a>
                    </li>
                    <li><a href="#">PRODUCTOS</a></li>
                </ul>
                <a class="header__menu-logo" href=""><img src="{{ asset('images/logo_parma.png') }}" alt="Logo Parma"></a>
                <ul>
                    <li>
                        <a href="#">DÓNDE COMPRAR</a>
                    </li>
                    <li><a href="#">CONTACTO</a></li>
                </ul>
            </nav>
        </header>
        
        <main class="main">
            @yield('content')
        </main>

        <footer class="footer">
            <div class="footer__retailers">
                <div class="container">
                    <div class="footer__retailers-text">
                        DÓNDE 
                        <br>
                        COMPRAR
                    </div>
                    <div class="footer__retailers-carousel" id="RetailersCarousel">
                        <a href="#"><img src="{{ asset('images/retailers/rappi.png') }}" alt="Rappi"></a>
                        <a href="#"><img src="{{ asset('images/retailers/walmart.png') }}" alt="Rappi"></a>
                        <a href="#"><img src="{{ asset('images/retailers/superama.png') }}" alt="Rappi"></a>
                        <a href="#"><img src="{{ asset('images/retailers/rappi.png') }}" alt="Rappi"></a>
                        <a href="#"><img src="{{ asset('images/retailers/walmart.png') }}" alt="Rappi"></a>
                        <a href="#"><img src="{{ asset('images/retailers/superama.png') }}" alt="Rappi"></a>
                    </div>
                    <div class="footer__retailers-controls">

                    </div>
                </div>
            </div>
            <div class="footer__content">
                <div class="container">
                    <div class="footer__content-nav">
                        <div class="rss">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-instagram"></span></a>
                            <a href="#"><span class="icon-youtube"></span></a>
                        </div>
                        <a href="logo-footer"><img src="{{ asset('images/logo_parma_footer.png') }}" alt="Logo Parma"></a>
                        <nav>
                            <a href="">Somos</a>
                            <a href="">Productos</a>
                            <a href="">Dónde comprar</a>
                            <a href="">Contacto</a>
                        </nav>
                    </div>
                    <div class="footer__content-legals">
                        <div class="tyc">
                            <a href=""><small>Aviso de privacidad</small></a>
                            <a href=""><small>Términos y condiciones</small></a>
                        </div>
                        <small>
                            2020© Parma®. todos los derechos reservados.
                        </small>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</body>
</html>

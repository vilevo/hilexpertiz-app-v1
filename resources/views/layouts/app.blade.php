<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.laravel = {
            csrfToken: '{{ csrf_token() }}'
        }
    </script>

    <!-- Title Tag -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('he_assets/img/logo/favicon.png')}}">

    <meta name="keywords" content="pis, 228pis, positive internet solution, crypto-monnaies, blockchain, togo, entreprendre, bitcoin, cryptomonnaies afrique, investir" />
    <meta name="description" content="Si vous souhaitez développer vos propres compétences en crypto-investissement et exploiter tout le potentiel de la technologie blockchain, c'est l'endroit qu'il vous faut.
nous vous souhaitons une belle expérience.">
    <meta name='copyright' content='hilexpertiz'>
    @yield('property')

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('he_assets/css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('he_assets/css/style.css')}}">

    <!-- App Color -->
    <link rel="stylesheet" href="{{asset('he_assets/css/skin.css')}}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('he_assets/fontawesome/css/all.css')}}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body>
    <!-- Debut header -->
    <header id="header" class="header">
        <nav class="navbar navbar-expand-md navbar-dark  bg-white">
            <div class="container">
                <a class="navbar-brand" href="#"> <img src="{{asset('he_assets/img/logo/horizontale.png')}}" alt="" width="150" height="150"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="background-color: #000;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Formations
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Formations certifiantes</a></li>
                                <li><a class="dropdown-item" href="#">Formations gratuites</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pour les entreprises</a>
                        </li>

                    </ul>
                    <a href="#" class="btn-outline">SE CONNECTER</a>
                    <!-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>
    </header>
    <!-- Fin header -->

    @yield('content')

    <!-- Debut footer -->
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- Links Widget -->
                        <div class="single-widget links">
                            <h2>HilExpertiz</h2>
                            <ul class="list">
                                <li><a href=""><i class="fa fa-angle-right"></i>Qui sommes-nous ?</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Expérience de formation</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Forum</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Blog</a></li>
                            </ul>
                        </div>
                        <!--/ End Links Widget -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- Links Widget -->
                        <div class="single-widget links">
                            <h2>Opportunités</h2>
                            <ul class="list">
                                <li><a href=""><i class="fa fa-angle-right"></i>Nous rejoindre</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Devenir Formateur</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Devenir Mentor</a></li>
                            </ul>
                        </div>
                        <!--/ End Links Widget -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- Links Widget -->
                        <div class="single-widget links">
                            <h2>En Plus</h2>
                            <ul class="list">
                                <li><a href=""><i class="fa fa-angle-right"></i>Mention légale</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Conditions générales d'utilisation</a></li>
                            </ul>
                        </div>
                        <!--/ End Links Widget -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- Links Widget -->
                        <div class="single-widget links">
                            <h2>Suppport et Communauté</h2>
                            <ul class="list">
                                <li><a href="https://wa.me/22891325637"><i class="fa fa-whatsapp"></i>Rejoignez-nous sur Whatsapp</a></li>
                                <li><a href="https://www.facebook.com/228PIS"><i class="fa fa-facebook"></i>Rejoignez-nous sur Facebook</a></li>
                                <li><a href="https://www.instagram.com/pis_formation/"><i class="fa fa-instagram"></i>Rejoignez-nous sur Instagram</a></li>
                                <li><a href="https://t.me/joinchat/dvWirhWMXqI4MWU0"><i class="fa fa-telegram"></i>Rejoignez-nous sur Telegram</a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i>Rejoignez-nous sur Twitter</a></li>
                            </ul>
                        </div>
                        <!--/ End Links Widget -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- copyright -->
                        <div class="copyright">
                            <p>&copy; <span id="year"></span> HilExpertiz.</p>
                        </div>
                        <!--/ End Copyright -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Fin footer -->

    <!-- Scripts -->


    <!-- Bootstrap JS -->
    <!-- <script src="{{asset('he_assets/js/bootstrap.bundle.min.js')}}"></script> -->
    <!-- Custom -->
    <script src="{{ asset('he_assets/custom_js/scripts.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('script')

</body>
@yield('modal')

</html>
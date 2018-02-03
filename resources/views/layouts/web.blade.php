<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
        <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
        <meta name="author" content="FREEHTML5.CO" />

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico">
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
        <!-- Animate -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- Icomoon -->
        <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        <!-- Modernizr JS -->
        <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="{{ asset('js/respond.min.js') }}"></script>
        <![endif]-->
    </head>
    <body>
        <div id="fh5co-offcanvas">
            <a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
            <div class="fh5co-bio">
                <figure>
                    <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
                </figure>
                @if (!Auth::guest())
                    <h2>{{ Auth::user()->name }}</h2>                
                @endif
            </div>
            <div class="fh5co-menu">
                <div class="fh5co-box">
                    <ul>
                        @if (Auth::guest())
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                        <li><a href="#">My Events</a></li>
                        <li><a href="#">My Tickets</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        
        @include('includes.header')

        @yield('content')

        <footer id="fh5co-footer">
            <p><small>&copy; {{ date('Y') }}. All Rights Reserverd.</small></p>
        </footer>
        
        <!-- jQuery -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- jQuery Easing -->
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Waypoints -->
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <!-- Main JS -->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
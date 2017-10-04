<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Spenders') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <b>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Spenders') }}
                        </a>
                    </b>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Non Authentication Links -->
                            <li><a href="{{ route('product') }}"><b>Product</b></a></li>
                            <li><a href="{{ route('team') }}"><b>Team</b></a></li>
                            <li><a href="{{ route('contact') }}"><b>Contact</b></a></li>
                        <!-- Divider -->
                            <li><a>|</a></li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><b>Login</b></a></li>
                            <li><a href="{{ route('register') }}"><b>Register</b></a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!--Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <ul>
                        <h2 id="socialmedia">Follow us:</h2>
                        <a href="#"><i class="fa fa-facebook-official"style="font-size:26px"></i></a>
                        <a href="#"><i class="fa fa-twitter-square"style="font-size:26px"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square" style="font-size:26px"></i></a>
                    </ul>
                    <h2 id="contactus">Contact us:</h2>
                    <p id="mail">info@spenders.com</p>
                    <p id="telnr">+31 6 135 529 74</p>
                </div>
                <h2 id="Locatie">Location</h2>
                <div class="col-xs-12 col-md-8">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </footer>

    {{--Scripts--}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/maps.js') }}"></script>
    <script src="{{ asset('js/animate.js') }}"></script>
    <script src="https://use.fontawesome.com/9f3d5e904b.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9yK8trEmC6b0tDmS0WeXD9D72cmHlPHY&callback=initMap">
    </script>
</body>
</html>

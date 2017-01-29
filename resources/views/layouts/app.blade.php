<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <!-- <link href="/css/app.css" rel="stylesheet">  -->

        <link rel="stylesheet" type="text/css" href="{{url('bootstrap/css/bootstrap.css')}}">

        <link rel="stylesheet" href="{{url('sources/site/fonts/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{url('sources/site/fonts/font-awesome-animation.css')}}">

        <link  rel="stylesheet" href="{{url('sources/site/css/style.css')}}">
        <!-- Scripts -->
        <script>
            window.Laravel = <?php
                echo json_encode([
                    'csrfToken' => csrf_token(),
                ]);
                ?>
        </script>
    </head>
    <body> 
        <!-- NAV SECTION -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Sistema CEE') }}
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home-sec">INICIO</a></li>
                        <li><a href="#services-sec">SERVIÇOS</a></li>
                        <li><a href="#contact-sec">CONTATO</a></li>

                        <!-- mudei o login Pra ka!!!! -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">LOGIN</a></li>
                        <li><a href="{{ url('/register') }}">REGISTRE-SE</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif 

                    </ul>

                </div>

            </div>
        </div>
        <!--END NAV SECTION -->

        @yield('conteudo')

        <!--FOOTER SECTION -->
        <div id="footer">
            2014 www.yourdomain.com | All Right Reserved | Terms | Policies | Licenses 

        </div>
        <!-- END FOOTER SECTION -->
        
    </body>
    <!--  Scripts  -->
    <script src="/js/app.js"></script> 

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{url('sources/site/plugins/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="{{url('sources/site/plugins/bootstrap.js')}}"></script>

    <!-- CUSTOM SCRIPTS -->
    <script src="{{url('sources/site/js/custom.js')}}"></script>
</html>

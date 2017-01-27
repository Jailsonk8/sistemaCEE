<!DOCTYPE html>
<html>
    <head>
        <title>{{$title or 'Cadastro-Edite'}}</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">   
        <link href="{{url('sources/painel/css/style-admin.css')}}" rel="stylesheet">

    </head> 
    <body>
        <div class="container">
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
                            <li><a href="#home-sec">HOME</a></li>
                            <li><a href="#services-sec">SERVICES</a></li>
                            <li><a href="#contact-sec">CONTACT</a></li>

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
            @yield('content')
        </div>
    </body>
    <!-- jQuery -->
    <script src="{{url('bootstrap/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>

</html>
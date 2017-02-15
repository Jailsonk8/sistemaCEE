<!DOCTYPE html>
<html>
    <head>
        <title>{{$title or 'Home Page Discente'}}</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">   


        <!-- MetisMenu CSS -->
        <link href="{{url('sources/painel/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{url('sources/painel/css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{url('sources/painel/css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{url('sources/painel/css/morris.css')}}" rel="stylesheet">

    </head> 
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Sistema CEE</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Top Navigation: Left Menu -->
                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i> Website</a></li>
                </ul>

                <!-- Top Navigation: Right Menu -->
                <ul class="nav navbar-right navbar-top-links">
                    
                    <!-- mudei o login Pra ka!!!! -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">LOGIN</a></li>
                    <li><a href="{{ url('/register') }}">REGISTRE-SE</a></li>
                    @else
                       <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                       
                             <span class="glyphicon glyphicon-user"></span>  {{ Auth::user()->name }} <span class="caret"></span>
                       </a>

                       <ul class="dropdown-menu" role="menu">
                       <li>
                                <!-- link para o historico de estagios -->
                            <a href="#" class="active"><i class="glyphicon glyphicon-user"></i> &nbsp; Perfil</a>
                       </li>
                       <li class="divider"></li>
                       <li>
                            <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                         <i class="glyphicon glyphicon-log-in"></i> &nbsp; Sair  
                            </a>

                               <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                               </form>
                        </li>
                        
                        </ul>
                        </li>
                     @endif 

                </ul>

                <!-- Sidebar -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">

                        <ul class="nav" id="side-menu">                    
                            <li>
                                <!-- link para o historico de estagios -->
                                <a href="#" class="active"><i class="glyphicon glyphicon-dashboard"></i> Historico</a>
                            </li>
                            <li>
                                <!-- link para o historico de estagios -->
                                <a href="#" class="active"><i class="glyphicon glyphicon-eye-open"></i> Curriculo</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">{{$title or "Dados"}}</h1>

                        </div>
                    </div>
                    </br>
                    <div class="col-md-8 col-md-offset-2">
                    @yield('content')
                        

                    </div>
                    <!-- ... Your content goes here ... -->

                </div>
                    </br>
                    </br>
            </div>
        </div>


    </body>

    <!-- jQuery -->
    <!-- <script src="{{url('bootstrap/js/jquery.js')}}"></script> -->
    <script src="{{url('sources/painel/js/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
<!--     <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script> -->
    <script src="{{url('sources/painel/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{url('sources/painel/js/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{url('sources/painel/js/startmin.js')}}"></script>

</html>
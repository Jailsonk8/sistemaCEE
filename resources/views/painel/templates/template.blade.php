<!DOCTYPE html>
<html>
    <head>
        <title>{{$title or 'Adminstrador'}}</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">   
        <link href="{{url('sources/painel/css/style-admin.css')}}" rel="stylesheet">  
        
    </head> 
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
     <!-- jQuery -->
    <script src="{{url('bootstrap/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
   
</html>

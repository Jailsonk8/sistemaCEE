<!DOCTYPE html>
<html>
    <head>
        <title>{{$title or 'Sistema CEE'}}</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">   
    </head> 
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
  
</html>


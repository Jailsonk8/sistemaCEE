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

    <link rel="stylesheet"  href="{{url('sources/site/css/bootstrap.css')}}">
    
    <link rel="stylesheet" href="{{url('sources/site/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{url('sources/site/css/font-awesome-animation.css')}}">

     <link  rel="stylesheet" href="{{url('sources/site/css/style.css')}}">
    <!-- Scripts -->
     <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    @yield('conteudo')
   
    <!--  Scripts  -->
    <script src="/js/app.js"></script> 
</body>
</html>

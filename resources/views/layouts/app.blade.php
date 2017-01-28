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
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    @yield('conteudo')
   
    <!--  Scripts  -->
    <script src="/js/app.js"></script> 

      <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{url('sources/site/plugins/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="{{url('sources/site/plugins/bootstrap.js')}}"></script>
  
    <!-- CUSTOM SCRIPTS -->
    <script src="{{url('sources/site/js/custom.js')}}"></script>
</body>
</html>

@extends('painel.templates.template')

@section('content')
    <div class="navbar navbar-fixed-top">
      <div class="container">
           
          
            <a class="navbar-brand" href="#">World</a>
            
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav">
              
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li> 
            
          </ul>
                <ul class="nav navbar-nav pull-right">
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
                </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


<!-- Content -->
<div class="container">
  	<div class="row">
      <div class="col-sm-2">
          <ul id="sidebar" class="nav nav-stacked affix">
            <li><a href="#">The Next Web</a></li>
            <li><a href="#">Mashable</a></li>
            <li><a href="#">TechCrunch</a></li>
            <li><a href="#">GitHub</a></li>
            <li><a href="#">In1</a></li>
            <li><a href="#">TechMeMe</a></li>
        </ul>
      </div>     
    </div>
</div>
@endsection
@extends('layouts.app')

@section('conteudo')    

     <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                  
                  
            </div>
                <!-- Branding Image -->
          <div class="navbar-brand">
                   <a href="{{url('/')}}">                        
                        <img class="img-rounded" style="max-width:90px; margin-top: -14px;" src="{{url('sources/painel/imgs/LOGO - PROEIFPI.png')}}">                    
                   </a>                 
          </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home-sec">INICIO</a></li>
                    <li><a href="#services-sec">SERVIÇOS</a></li>
                    <li><a href="#contact-sec">CONTATO</a></li>

                     <!-- mudei o login Pra ka!!!! -->
                    @if(Auth::guest())
                    <li><a href="{{ url('/login') }}">LOGIN</a></li>
                    <li><a href="{{ url('/register') }}">REGISTRE-SE</a></li>
                    @else
                        <li>
                            <a class="text-uppercase" href="{{url('/login')}}">  
                                <span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}
                            </a>
                        </li>
                    @endif

                </ul>

            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->

<!--HOME SECTION-->
<div id="home-sec">


    <div class="container" id="home" >
        <div class="row text-center">
            <div class="col-md-12">
                <span class="head-main">PROEIFPI</span>
                <h2 class="head-sub-main">Sistema do Programa de Estagio do IFPI</h2>
                <h3 class="head-last">Assista o Tuturial em Video!</h3>
                <a href="#about-sec" class="btn btn-danger btn-lg head-btn-one">Clique aqui !</a> 
            </div>
        </div>
    </div>
</div>
<!--END HOME SECTION-->

<!--SERVICES SECTION-->    
<section  id="services-sec">
    <div class="container">
        <div class="row ">
            <h1>Nossos Serviços</h1>
            <div class="col-md-12 g-pad-bottom">
                <div class="col-md-12">
                    <h2>Serviços Oferecidos pelo Sistema PROEIFPI</h2>
                    <p>
                       O sistema tem como principal objetivo otimizar o controle dos estágios oferecidos por empresas vinculadas 
ao Instituto Federal de Ciência e Tecnologia do Piauí - Campus Parnaíba. Nisso, o PROEIFPI atua como principal 
agente no controle, tanto de empresas vinculadas a instituição, quanto aos alunos que estagiam. Facilitando 
assim, o contato de estudantes com as empresas e beneficiando ambas as partes.              
                    </p>
                </div>
                
            </div>

            <div class="col-md-12 text-center">
                <div class="col-md-4 ">
                    <div class="service-div">
                        <i class="fa fa-desktop fa-5x faa-vertical animated"></i>
                        <h4>Sure Quique Menu </h4>
                        <p>
                            Nestes locais podemos colocar links para paginas como a do ifpi,
                            de outros servicos do instituto!!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="service-div">
                        <i class="fa fa-flask fa-5x faa-ring animated"></i>
                        <h4>100% Free Responsive </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-div">
                        <i class="fa fa-credit-card fa-5x faa-shake animated"></i>
                        <h4>Clean & Customizable </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 g-pad-bottom">
                <div class="col-md-12">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.   
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.   
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.              
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
<!--END SERVICES SECTION-->

<!--STATS SECTION-->
<section class="c-blue">
    <div class="container">
        <div class="row ">
            <div class="col-md-9 ">
                <div class="stats-div">
                    <h3>Featured In Wall Street </h3>
                    <h4>and many other magzines..</h4>
                </div>
            </div>


            <div class="col-md-3 ">
                <div class="stats-div">
                    <h3>300+</h3>
                    <h4>Reports</h4>
                </div>

            </div>


        </div>
    </div>
</section>
<!--END STATS SECTION-->




<!--CONTACT SECTION-->

<section  id="contact-sec">
    <div class="container">

        <div class="row">
            <h1>Contact Us :</h1>
            <div class="col-md-12 g-pad-bottom">
                <div class="col-md-6">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.              
                    </p>
                </div>
                <div class="col-md-6">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.              
                    </p>
                </div>
            </div>
            <div class="col-md-6">

                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <p>
                    <strong>Address:</strong>  123,Your locality , Counrty Name, Pin-20100090. <br />
                    <strong>Email:</strong>  info@yourdomain.com <br />
                    <strong>Web:</strong>  www.yourdomain.com <br />
                    <strong>Mobile:</strong>  +00-909-808-707-00<br />
                </p>
            </div>
        </div>
    </div>
</section>
<!--END CONTACT SECTION-->


<!-- SOCIAL STATS SECTION-->
<section>
    <div class="container">

    </div>
</section>
<!-- END SOCIAL STATS SECTION-->

 <!--FOOTER SECTION -->
        <div id="footer">
            2014 www.yourdomain.com | All Right Reserved | Terms | Policies | Licenses 

        </div>


@endsection
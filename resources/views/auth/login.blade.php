@extends('auth.templates.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Acesse sua conta</h3>
                </div>
                <div class="panel-body">
                    
                    {!! Form::open(['route' => 'login', 'class' => 'form']) !!} 
                        
                        <fieldset>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                {!! Form::text('email', null, ['id'=> 'email', 'class' => 'form-control', 'placeholder' => 'E-mail']) !!}
                               
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                
                            </div>
                            
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                
                                 {!! Form::password('password', ['id'=> 'password', 'class' => 'form-control', 'placeholder' => 'Senha']) !!}
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                          
                            {!! Form::submit('Login', ['class' => 'btn btn-lg btn-success btn-block']) !!}
                            
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                Esqueceu sua senha?
                            </a>
                            
                            <a href="{{ url('/register') }}">cadastre-se</a>
              
                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

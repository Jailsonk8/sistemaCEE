@extends('auth.templates.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Cadastre-se</h3>
                </div>
                <div class="panel-body">
                     {!! Form::open(['route' => 'register', 'class' => 'form']) !!}
                        <fieldset>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::text('name', null, ['id'=> 'nome', 'class' => 'form-control', 'placeholder' => 'Nome']) !!}
                                
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                                
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                
                                {!! Form::text('email', null, ['id'=> 'email', 'class' => 'form-control', 'placeholder' => 'E-mail']) !!}
                                
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                
                            </div>
                            
                            <div class="form-group{{ $errors->has('acesso') ? ' has-error' : '' }}">
                                {!! Form::select('acesso', ['D' => 'Dicente', 'E' => 'Empresa'], null, ['id' => 'acesso', 'class' => 'form-control', 'placeholder' => 'Selecione seu acesso']) !!}
                                
                                 @if ($errors->has('acesso'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('acesso') }}</strong>
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
                            
                            <div class="form-group">
                                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmar Senha']) !!}
                            </div>

                            
                            {!! Form::submit('Cadastrar', ['class' => 'btn btn-lg btn-success btn-block']) !!}
                        </fieldset>
                     {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

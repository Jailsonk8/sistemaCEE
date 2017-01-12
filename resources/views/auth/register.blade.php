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
                    <form accept-charset="UTF-8" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" class="form-control" placeholder="Nome" name="name" type="text" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('nome'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" class="form-control" placeholder="E-mail" name="email" type="text" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" class="form-control" placeholder="Senha" name="password" type="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                    <input id="password-confirm" type="password"  placeholder="Confirmar Senha" class="form-control" name="password_confirmation" required>
                            </div>

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Cadastrar">
                            
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

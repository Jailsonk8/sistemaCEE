@extends('painel.templates.template')

@section('content')

    {!! Form::open(['route' => 'discentes.store']) !!}
    
        <div class="form-group">
            {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome Completo']) !!}
            
            @if ($errors->has('nome'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nome') }}</strong>
                    </span>
           @endif
           
        </div>
        <div class="form-group">
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
            
            @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!! Form::text('matricula', null, ['class' => 'form-control', 'placeholder' => 'Matricula']) !!}
            
            @if ($errors->has('matricular'))
                    <span class="help-block">
                        <strong>{{ $errors->first('matricula') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!! Form::select('curso', ['1' => 'Informatica', '2' => 'Eletrotecnica', '3' => 'Edificação'], null, ['class' => 'form-control','placeholder' => 'Selecione seu curso..']) !!}
            
            @if ($errors->has('curso'))
                    <span class="help-block">
                        <strong>{{ $errors->first('curso') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!! Form::text('cpf', null, ['class' => 'form-control', 'placeholder' => 'CPF']) !!}
            
            @if ($errors->has('cpf'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cpf') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!! Form::text('ctps', null, ['class' => 'form-control', 'placeholder' => 'CTPS']) !!}
            
            @if ($errors->has('ctps'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ctps') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!! Form::text('rg_expeditor', null, ['class' => 'form-control', 'placeholder' => 'Org. Expeditor']) !!}
            
            @if ($errors->has('rg_expeditor'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rg_expeditor') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!! Form::text('rg', null, ['class' => 'form-control', 'placeholder' => 'RG']) !!}
            
            @if ($errors->has('rg'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rg') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!!Form::label('null', 'Data de Nascimento:')!!}
            {!! Form::date('nascimento', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
            
            @if ($errors->has('nascimento'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nascimento') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!! Form::text('endereco', null, ['class' => 'form-control', 'placeholder' => 'Endereço']) !!}
            
            @if ($errors->has('endereco'))
                    <span class="help-block">
                        <strong>{{ $errors->first('endereco') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!! Form::text('bairro', null, ['class' => 'form-control', 'placeholder' => 'Bairro']) !!}
            
            @if ($errors->has('bairro'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bairro') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!! Form::text('estado', null, ['class' => 'form-control', 'placeholder' => 'Estado']) !!}
            
            @if ($errors->has('estado'))
                    <span class="help-block">
                        <strong>{{ $errors->first('estado') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!! Form::text('cidade', null, ['class' => 'form-control', 'placeholder' => 'Cidade']) !!}
            
            @if ($errors->has('cidade'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cidade') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!! Form::text('cep', null, ['class' => 'form-control', 'placeholder' => 'CEP']) !!}
            
            @if ($errors->has('cep'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cep') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            {!! Form::text('fone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']) !!}
            
            @if ($errors->has('fone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fone') }}</strong>
                    </span>
                @endif
        </div>
<!--        <div class="form-group">
            {!!Form::label('null', 'Selecione seu curriculo:')!!}
            {!! Form::file('nome_curriculo', ['class' => 'form-control']) !!}
            
            @if ($errors->has('curriculo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('curriculo') }}</strong>
                    </span>
                @endif
        </div>-->
    {!! Form::submit('Cadastrar', ['class' => 'btn btn-lg btn-success btn-block']) !!}<br><br>
    {!! Form::close() !!}
@endsection

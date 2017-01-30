@extends('painel.templates.template')

@section('content')

            {!! Form::open(['route' => 'empresas.store']) !!}
         
            <div class="form-group">
                {!! Form::text('representante', null, ['class' => 'form-control', 'placeholder' => 'Representante']) !!}
                
                @if ($errors->has('representante'))
                    <span class="help-block">
                        <strong>{{ $errors->first('representante') }}</strong>
                    </span>
                @endif
                
            </div>
            <div class="form-group">
                {!! Form::text('cargo', null, ['class' => 'form-control', 'placeholder' => 'Cargo do Representente ']) !!}
                
                @if ($errors->has('cargo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cargo') }}</strong>
                    </span>
                @endif
                
            </div>
            <div class="form-group">
                {!! Form::text('nome_empresa', null, ['class' => 'form-control', 'placeholder' => 'Nome da Empresa']) !!}
                
                @if ($errors->has('nome_empresa'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nome_empresa') }}</strong>
                    </span>
                @endif
                
            </div>
            <div class="form-group">
                {!! Form::text('area_atuante', null, ['class' => 'form-control', 'placeholder' => 'Área Atuante de Empresa']) !!}
                
                @if ($errors->has('area_atuante'))
                    <span class="help-block">
                        <strong>{{ $errors->first('area_atuante') }}</strong>
                    </span>
                @endif
                
            </div>
            <div class="form-group">
                {!! Form::text('cnpj', null, ['class' => 'form-control', 'placeholder' => 'CNPJ']) !!}
                
                @if ($errors->has('cnpj'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cnpj') }}</strong>
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
            {!! Form::submit('Cadastrar', ['class' => 'btn btn-lg btn-success btn-block']) !!}<br><br>
            {!! Form::close() !!}
      
@endsection

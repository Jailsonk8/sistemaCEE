@extends('painel.templates.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{$title or "Dados"}}</h1>
            <hr>
            {!! Form::open(['route' => 'empresas.store']) !!}

            <div class="form-group">
                {!! Form::text('representente', null, ['class' => 'form-control', 'placeholder' => 'Representente']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('cargo', null, ['class' => 'form-control', 'placeholder' => 'Cargo do Representente ']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('nome_empresa', null, ['class' => 'form-control', 'placeholder' => 'Nome da Empresa']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('cnpj', null, ['class' => 'form-control', 'placeholder' => 'CNPJ']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('endereco', null, ['class' => 'form-control', 'placeholder' => 'Endereço']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('bairro', null, ['class' => 'form-control', 'placeholder' => 'Bairro']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('estado', null, ['class' => 'form-control', 'placeholder' => 'Estado']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('cidade', null, ['class' => 'form-control', 'placeholder' => 'Cidade']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('cep', null, ['class' => 'form-control', 'placeholder' => 'CEP']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('fone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']) !!}
            </div>
            {!! Form::submit('Cadastrar', ['class' => 'btn btn-lg btn-success btn-block']) !!}<br><br>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

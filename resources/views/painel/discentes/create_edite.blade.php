@extends('painel.discentes.templates.template')

@section('content')
    
    {!! Form::open(['route' => 'discentes.store']) !!}
    
        <div class="form-group">
            {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome Completo']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('matricula', null, ['class' => 'form-control', 'placeholder' => 'Matricula']) !!}
        </div>
        <div class="form-group">
            {!! Form::select('curso', ['1' => 'Informatica', '2' => 'Eletrotecnica', '3' => 'Edificação'], null, ['class' => 'form-control','placeholder' => 'Selecione seu curso..']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('cpf', null, ['class' => 'form-control', 'placeholder' => 'CPF']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('rg', null, ['class' => 'form-control', 'placeholder' => 'RG']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('null', 'Data de Nascimento:')!!}
            {!! Form::date('nascimento', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
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
        <div class="form-group">
            {!!Form::label('null', 'Selecione seu curriculo:')!!}
            {!! Form::file('curriculo', ['class' => 'form-control']) !!}
        </div>
    {!! Form::submit('Cadastrar', ['class' => 'btn btn-lg btn-success btn-block']) !!}<br><br>
    {!! Form::close() !!}
@endsection

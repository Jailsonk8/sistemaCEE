@extends('painel.templates.template')

@section('content')
    {!! Form::open(['url' => '/curriculo/cadastro']) !!}
          <div class="form-group">
            {!!Form::label('null', 'Selecione seu curriculo:')!!}
            {!! Form::file('nome_curriculo', ['class' => 'form-control']) !!}
            
                @if ($errors->has('nome_curriculo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nome_curriculo') }}</strong>
                    </span>
                @endif
            </div>   
        {!! Form::submit('Upload', ['class' => 'btn btn-lg btn-success btn-block']) !!}
    {!! Form::close() !!}
@endsection
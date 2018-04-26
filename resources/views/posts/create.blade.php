@extends('main')
@section('title', ' | Blog')

@section('conteudo')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Criar novo post</h1>
      <hr>
      {!! Form::open(['route' => 'posts.store']) !!}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null,array('class' => 'form-control')) }}

        {{ Form::label('texto', 'Texto do Post:') }}
        {{ Form::textarea('texto', null,array('class' => 'form-control')) }}

        {{ Form::submit('Criar Post',array('class' => 'btn btn-success btn-large btn-block', 'style' => 'margin-top: 10px')) }}
      {!! Form::close() !!}
    </div>
  </div>

@endsection

@extends('main')
@section('title', ' | Blog')
@section('css')
  {!! Html::style('css/parsley.css') !!}
@endsection

@section('conteudo')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Criar novo post</h1>
      <hr>
      {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null,array('class' => 'form-control','required' => '', 'maxlength' => '250')) }}

        {{ Form::label('texto', 'Texto do Post:') }}
        {{ Form::textarea('texto', null,array('class' => 'form-control', 'required' => '')) }}

        {{ Form::submit('Criar Post',array('class' => 'btn btn-success btn-large btn-block', 'style' => 'margin-top: 10px')) }}
      {!! Form::close() !!}
    </div>
  </div>

@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js') !!}
@endsection

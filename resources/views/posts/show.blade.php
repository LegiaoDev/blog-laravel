@extends('main')
@section('title', ' | View Post')

@section('conteudo')

  <h1>{{ $post->title }}</h1>

  <p class="lead">{{ $post->texto }}</p>

@endsection

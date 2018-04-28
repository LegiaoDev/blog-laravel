@extends('main')
@section('title', ' | View Post')

@section('conteudo')

<div class="row">
  <div class="col-md-12 jumbotron">
    <div class="row">
    <div class="col-md-10">
      <h1>{{ $post->title }}</h1>
    </div>
    <div class="col-md-2">
      <a href="{!! route('posts.index') !!}" class="btn btn-h1-spacing btn-sm btn-primary btn-block">Ver Posts</a>
    </div>
  </div>
  </div>
  <p class="lead">{{ $post->texto }}</p>
</div>
@endsection

@extends('main')

@section('title', ' | View Post')


@section('conteudo')

<div class="row">

    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>

  <p class="lead">{{ $post->texto }}</p>
  <hr>
  <a href="{!! route('posts.index') !!}" class="btn btn-sm btn-primary">Ver Posts</a>
  </div>
  <div class="col-md-4">
    <div class="jumbotron well">
      <dl class="dl-horizontal">
        <dt>Criado as:</dt>
        <dd>{{ date('M j, Y | H:i:s',strtotime($post->created_at)) }}</dd>
      </dl>
      <dl class="dl-horizontal">
        <dt>Atualizado as:</dt>
        <dd>{{ date('M j, Y | H:i:s',strtotime($post->updated_at)) }}</dd>
      </dl>
      <hr>
      <div class="row">
        <div class="col-sm-6">
          {!! Html::linkRoute('posts.edit', 'Editar', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
        </div>
        <div class="col-sm-6">
          {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

          {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-block deletar']) !!}

          {!! Form::close() !!}
        </div>
      </div>

    </div>
  </div>

</div>
@endsection

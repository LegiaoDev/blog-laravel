@extends('main')

@section('title', ' | Editar Post')


@section('conteudo')

<div class="row">

  <div class="col-md-8">
    <h1>Atualização do post: <strong>{{ $post->title }}</strong></h1>
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
      {{ Form::text('title', null, ['class' => 'form-control']) }}
      {{ Form::textarea('texto', null, ['class' => 'form-control']) }}
  <hr>

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
          {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
        </div>
        <div class="col-sm-6">

          {!! Html::linkRoute('posts.edit', 'Cancelar', array($post->id), array('class' => 'btn btn-sm btn-danger btn-block')) !!}
        </div>
      </div>
      {!! Form::close() !!}

    </div>
  </div>

</div>
@endsection

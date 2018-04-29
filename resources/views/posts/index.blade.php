@extends('main')
@section('title', ' | Nossos posts')

@section('conteudo')

  <div class="row">
    <div class="col-md-10">
      <h1>Todos os Posts</h1>
    </div>
    <div class="col-md-2">
      <a href="{{ route('posts.create') }}" class="btn btn-md btn-block btn-primary btn-h1-spacing">Criar novo post</a>
    </div>
    <hr>
    <div class="col-md-12">
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
        <table class="table">
          <thead>
            <th>ID</th>
            <th>Título</th>
            <th>Texto</th>
            <th>Criado as</th>
            <th></th>
          </thead>

          <tbody>
            @foreach ($posts as $post)

              <tr>
                <th>{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ substr($post->texto, 0, 50) }}{{ strlen($post->texto) > 50 ? "..." : "" }}</td>
                <td>{{ date('F m, Y',  strtotime($post->created_at)) }}</td>
                <td>
                  <a href="{{ route('posts.show', $post->id) }}" class="btn btn-block btn-secondary">Ver</a>
                  <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-block btn-primary">Editar</a>
                </td>
              </tr>

            @endforeach
          </tbody>
        </table>
    </div>
  </div>

@endsection

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
                <td>{{ $post->texto }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                  <a href="#" class="btn btn-block btn-secondary">Ver</a>
                  <a href="#" class="btn btn-block btn-primary">Editar</a>
                  <a href="#" class="btn btn-block btn-danger">Excluir</a>
                </td>
              </tr>

            @endforeach
          </tbody>
        </table>
    </div>
  </div>

@endsection

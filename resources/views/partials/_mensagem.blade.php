@if (Session::has('success'))
  <div class="alert alert-success" role="alert">
    <strong>Sucesso!</strong> {{ Session::get('success') }} <a href="{{ route('posts.index') }}" class="btn btn-primary">Ver Post</a>
  </div>
@endif

@extends('main')
@section('title', ' | Contato')
@section('conteudo')

      <div class="row">
        <div class="col-md-12">
          <h1>Entre em contato</h1>
          <hr>
          <form action="#">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="mensagem">Mensagem: </label>
              <textarea id="mensagem" name="mensagem" class="form-control">Digite sua mensagem</textarea>
            </div>
            <input type="submit" value="Enviar" class="btn btn-success">
          </form>
        </div>
      </div>
    @endsection

<?php

namespace App\Http\Controllers;

class PaginasController extends Controller {

  public function getIndex() {
    return view('paginas.home');
  }

  public function getConteudo() {

    $nome = 'Gabriel';
    $sobrenome = 'Antonio';

    $nomeCompleto = $nome . " " . $sobrenome;
    $email = 'gabrielantoniocp9@gmail.com';
    // $dados = array (
    //
    //     'email' => $email,
    //     'nome'  => $nomeCompleto
    //
    // );
    // Uma maneira de inserir informações no View
    return view('paginas.conteudo')->withNomeCompleto($nomeCompleto)->withEmail($email);

    // Passando informações de um array para o view
    // return view('paginas.sobre')->withDados($dados);
  }

  public function getContato() {
    return view('paginas.contato');
  }

  public function getEmpresa() {
    return view('paginas.empresa');
  }



}

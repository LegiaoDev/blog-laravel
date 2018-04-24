<?php

namespace App\Http\Controllers;

class PaginasController extends Controller {

  public function getIndex() {
    return view('paginas.welcome');
  }

  public function getSobre() {
    return view('paginas.sobre');
  }

  public function getContato() {
    return view('paginas.contato');
  }



}

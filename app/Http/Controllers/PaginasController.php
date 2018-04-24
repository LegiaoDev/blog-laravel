<?php

namespace App\Http\Controllers;

class PaginasController extends Controller {

  public function getIndex() {
    return view('welcome');
  }

  public function getSobre() {
    return view('sobre');
  }

  public function getContato() {
    return view('contato');
  }



}

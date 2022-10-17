<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ContatoController extends Controller
{
    public function index() {
    $data['titulo'] = "Minha página de Contato Dinâmica.";
    return view('contato', $data);
}
}

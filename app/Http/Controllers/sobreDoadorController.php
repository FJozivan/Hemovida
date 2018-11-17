<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\doador;

class sobreDoadorController extends Controller
{
    public function SobreDoador() {
        $titulo = "Sobre o doador";
        return view('sobre_doador', compact('titulo'));
    }
}

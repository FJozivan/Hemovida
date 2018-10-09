<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class master_controller extends Controller
{
    public function Cadastro_funcionario() {
        $titulo = "Cadastro Funcionario";
        return view('cadastro_funcionario', compact('titulo'));
    }
}

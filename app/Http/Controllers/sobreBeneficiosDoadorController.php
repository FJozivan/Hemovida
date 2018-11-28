<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\doador;

class sobreBeneficiosDoadorController extends Controller
{
    public function SobreDoador() {
        $titulo = "Sobre o doador";
        return view('sobre_doador', compact('titulo'));
    }

    public function BeneficiosDoador() {
        $titulo = "Benefícios de ser doador";
        return view('beneficios_doador', compact('titulo'));
    }
}

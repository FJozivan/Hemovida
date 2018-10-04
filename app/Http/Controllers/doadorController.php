<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doador;

class doadorController extends Controller
{
    //
 
    public function CadastroDoador() {
        $titulo = "Cadastro do doador";
        return view('cadastro_doador', compact('titulo'));
    }

    public function CadastrarDoador(Request $requisicao) {

        $doador = new doador();

        $doador->nome = $requisicao->nome;
    	$doador->sobrenome = $requisicao->sobrenome;
    	$doador->cpf = $requisicao->cpf;
    	$doador->data_nascimento = $requisicao->data_nascimento;
    	$doador->sexo = $requisicao->sexo;
    	$doador->email = $requisicao->email;
    	$doador->profissao = $requisicao->profissao;
    	$doador->senha = $requisicao->senha_confirmada;
    	$doador->cep = $requisicao->cep;
    	$doador->rua = $requisicao->rua;
    	$doador->numero = $requisicao->numero;
    	$doador->bairro = $requisicao->bairro;
    	$doador->cidade = $requisicao->cidade;
    	$doador->referencia = $requisicao->referencia;
    	$doador->tipo_sanguineo = $requisicao->tipo_sanguineo;

    	//dd($doador);
    	$doador->save(); 
    }

	public function ver_doadores() {

        $dados = doador::all();
        return view('doadores_cadastrados', compact('dados'));
    }    
}

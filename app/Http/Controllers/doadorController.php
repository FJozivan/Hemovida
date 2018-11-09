<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\doador;

class doadorController extends Controller
{
    //
 
    public function CadastroDoador() {
        $titulo = "Cadastro do doador";
        return view('cadastro_doador', compact('titulo'));
    }

    public function CadastrarDoador(Request $requisicao) {

        $this->validate($requisicao,[
        
            'nome' => 'required',
            'sobrenome' => 'required',
            'cpf' => 'required|unique:doadors,cpf',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'cep' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'numero' => 'required',
            'tipo_sanguineo' => 'required'

        ]);

        $doador = new doador();

        $doador->nome = $requisicao->nome;
    	$doador->sobrenome = $requisicao->sobrenome;
    	$doador->cpf = $requisicao->cpf;
    	$doador->data_nascimento = $requisicao->data_nascimento;
    	$doador->sexo = $requisicao->sexo;
    	$doador->email = $requisicao->email;
    	$doador->profissao = $requisicao->profissao;
    	$doador->senha = md5($requisicao->senha_confirmada);
    	$doador->cep = $requisicao->cep;
    	$doador->rua = $requisicao->rua;
    	$doador->numero = $requisicao->numero;
    	$doador->bairro = $requisicao->bairro;
    	$doador->cidade = $requisicao->cidade;
    	$doador->referencia = $requisicao->referencia;
    	$doador->tipo_sanguineo = $requisicao->tipo_sanguineo;

        $doador->save(); 
        $requisicao->session()->flash('success','Você foi cadastrado com sucesso! Acesse sua conta.');
        return redirect('/login_doador');
    }

    public function Questionario() {
        $titulo = "Questionário do doador";
        return view('questionario', compact('titulo'));
    }
}

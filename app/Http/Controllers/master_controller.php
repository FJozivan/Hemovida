<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\funcionario;

class master_controller extends Controller
{
    public function Cadastro_funcionario() {
        $titulo = "Cadastro Funcionario";
        return view('cadastro_funcionario', compact('titulo'));
    }

    public function Cadastrar_funcionario(Request $requisicao) {
        
        $this->validate($requisicao,[
        	
        	'numero_inscricao' => 'required|unique:funcionarios,numero_inscricao',
            'nome' => 'required',
            'sobrenome' => 'required',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'email' => 'required',
            'senha' => 'required'

        ]);

        $funcionario = new funcionario();

        $funcionario->numero_inscricao = $requisicao->numero_inscricao;
        $funcionario->nome = $requisicao->nome;
    	$funcionario->sobrenome = $requisicao->sobrenome;
    	$funcionario->sexo = $requisicao->sexo;
    	$funcionario->email = $requisicao->email;
    	$funcionario->senha = md5($requisicao->senha_confirmada);

    	//dd($funcionario);
    	$funcionario->save(); 
    }
}

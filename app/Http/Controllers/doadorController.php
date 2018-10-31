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

    	//dd($doador);
    	$doador->save(); 
        //return ('cadastrado com sucesso!, volte a página.');
        return redirect('/')->with('success','Cadastro realizado com sucesso!.');
    }

    public function Questionario() {
        $titulo = "Questionário do doador";
        return view('questionario', compact('titulo'));
    }

	public function ver_doadores() {
        if (request()->has('name')) {
            $dados = doador::where('nome', request()->name)->get();
        } else {
            $dados = doador::all();
        }
        $nome = "DOADORES";
        return view('lista_cadastrados', compact('dados','nome'));
    }
    
    public function EditarDoador($id) {
        $dados = doador::where('id_doador',  $id)->first();
        $titulo = "Editar doador";
        return view('editar_doador', compact('dados', 'titulo'));
    }

    public function AtualizarDoador(Request $requisicao) {
        echo $requisicao;
        return redirect('/')->with('success','Cadastro realizado com sucesso!.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\doador;
use App\pergunta_formularios;
use App\resposta_perguntas;

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
        $doador->image = $requisicao->image;
        $doador->quetionarioRespondido = 0;

        $doador->save(); 
        $requisicao->session()->flash('success','Você foi cadastrado com sucesso! Acesse sua conta.');
        return redirect('/login_doador');
    }

    public function Questionario() {
        $titulo = "Questionário do doador";
        $questionario = pergunta_formularios::all();
        // ->orderBy('id_pergunta', 'desc')
        // ->get();
        return view('questionario', compact('questionario', $questionario));
    }

    public function salva_Questionario(Request $requisicao) {
        
        // $this->validate($requisicao,[       
        //     1 => 'required',
        //     2 => 'required',
        //     3 => 'required',
        //     4 => 'required',
        //     5 => 'required',
        //     6 => 'required',
        //     '7' => 'required',
        //     '8' => 'required',
        //     '9' => 'required',
        //     '10' => 'required',
        //     '11' => 'required',
        //     '12' => 'required',
        //     '13' => 'required',
        //     '14' => 'required',
        //     '15' => 'required',
        //     '16' => 'required',
        //     '17' => 'required',
        //     '18' => 'required'
        // ]);

        $dados = $requisicao->all();
        foreach ($dados as $dado => $value) {
    		if($dado != '_token'){
    			$a = resposta_perguntas::create([
                    'resposta' => $value === 'true' ? 1 : 0,
                    'id_pergunta' => $dado,
                    'id_doador' => session()->get('user')[0]['id']
                ]);
            }
        }
        $doador = doador::find(session()->get('user')[0]['id']);
        $doador->quetionarioRespondido = 1;
        $doador->save();

        $dados = doador::where('id', session()->get('user')[0]['id'])->first();
        $requisicao->session()->forget('user');
        $requisicao->session()->push('user', $dados);
        //dd(session()->get('user')[0]['quetionarioRespondido']);
        $requisicao->session()->flash('success','Seu questionario foi enviado com sucesso!!');
        return redirect('/perfil_doador');
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\funcionario;
use App\master;

class master_controller extends Controller
{

    //Login

    public function FazerLogin() {
        $titulo = "Login";
        return view('login_hemoce', compact('titulo'));
    }

    public function logar(Request $requisicao) {

        // Apaga dados da sessão;
        $requisicao->session()->forget('user');

        // Verificação dos entradas

        $this->validate($requisicao,[
        
            'numero_inscricao' => 'required',
            'senha' => 'required'

        ]);
        
        // Dados do banco

        $dados_f = funcionario::where('inscricao_hemoce', $requisicao->numero_inscricao)->first();
        $dados_m = master::where('login', $requisicao->numero_inscricao)->first();

        if ($dados_f == null && $dados_m == null) {
            $titulo = "Login";
            $erro2 = "Não existe essa conta de usuário";
            return view('login_hemoce', compact('erro2','titulo'));

        }else if($dados_f != null && $dados_m == null){

            if ($dados_f->senha == md5($requisicao->senha)) {

                //Session
                $requisicao->session()->push('user', $dados_f);

                $logado = $dados_f->nome;

                return view('inicio_apos_login_master', compact('titulo','logado'));

            }else{
                $titulo = "Login";
                $erro2 = 'A senha deste usuario não confere!';
                return view('login_hemoce', compact('erro2','titulo'));
                
            }

        }else if($dados_f == null && $dados_m != null){

            if ($dados_m->senha == md5($requisicao->senha)) {

                //Session
                $requisicao->session()->push('user', $dados_m);

                $logado = $dados_m->nome_master;
                return view('inicio_apos_login_master', compact('titulo','logado'));

            }else{
                $titulo = "Login";
                $erro2 = 'A senha deste usuario não confere!';
                return view('login_hemoce', compact('erro2','titulo'));
            }
        }
   
    }

    public function logout(Request $requisicao) {

        // Apaga dados da sessão;
        $requisicao->session()->forget('user');
        return redirect('login_hemoce');
        //return "Deslogado";
    }
    // Cadastro de funcionarios
    public function Cadastro_funcionario() {
        $titulo = "Cadastro Funcionario";
        $logado = "Master";
        return view('cadastro_funcionario', compact('logado'));
    }

    public function Cadastrar_funcionario(Request $requisicao) {
        
        $this->validate($requisicao,[
        	
        	'numero_de_inscricao' => 'required|unique:funcionarios,inscricao_hemoce',
            'nome' => 'required',
            'sobrenome' => 'required',
            'sexo' => 'required',
            'email' => 'required',
            'senha' => 'required'
        ]);

        $funcionario = new funcionario();

        $funcionario->inscricao_hemoce = $requisicao->numero_de_inscricao;
        $funcionario->nome = $requisicao->nome;
    	$funcionario->sobrenome = $requisicao->sobrenome;
    	$funcionario->sexo = $requisicao->sexo;
    	$funcionario->email = $requisicao->email;
    	$funcionario->senha = md5($requisicao->senha);

    	//dd($funcionario);
    	$funcionario->save(); 
    }

    public function ver_funcionarios(Request $requisicao) {

        $dados = funcionario::all();
        $nome = "FUNCIONARIOS";
        $logado = "Master";
        return view('lista_funcionarios_cadastrados', compact('dados','nome','logado'));
    }

    public function EditarFuncionario($id) {
        $dados = funcionario::where('id_funcionario',  $id)->first();
        $titulo = "Editar funcionário";
        $logado = "Master";
        return view('editar_funcionario', compact('dados', 'titulo', 'logado'));
    }

    public function AtualizarFuncionario(Request $requisicao) {
        echo $requisicao;
        return redirect('/ver_funcionarios')->with('success','Cadastro realizado com sucesso!.');
    }
}

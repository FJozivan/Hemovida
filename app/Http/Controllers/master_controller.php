<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\funcionario;
use App\master;
use App\doador;

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
                $requisicao->session()->push('usuario', [
                    'user' => 'f'
                ]);
                return redirect('/doadoresCadastrados');

            }else{
                $titulo = "Login";
                $erro2 = 'A senha deste usuario não confere!';
                return view('login_hemoce', compact('erro2','titulo'));
                
            }

        }else if($dados_f == null && $dados_m != null){

            if ($dados_m->senha == md5($requisicao->senha)) {

                //Session
                $requisicao->session()->push('user', $dados_m);
                $requisicao->session()->push('usuario', [
                    'user' => 'm'
                ]);
                return redirect('/doadoresCadastrados');

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
        $requisicao->session()->forget('usuario');
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

        $funcionario->save(); 
        $requisicao->session()->flash('success','Funcionario cadastrado com sucesso!');
        return redirect('/ver_funcionarios');
    }

    public function ver_funcionarios(Request $requisicao) {

        $dados = funcionario::all();
        return view('lista_funcionarios_cadastrados', compact('dados'));
    }

    public function EditarFuncionario($id) {
        $dados = funcionario::find($id);
        $titulo = "Editar funcionário";
        return view('editar_funcionario', compact('dados', 'titulo', 'logado'));
    }

    public function AtualizarFuncionario(Request $requisicao) {
        $funcionario = funcionario::find($requisicao->id);
        
        $funcionario->inscricao_hemoce = $requisicao->numero_de_inscricao;
        $funcionario->nome = $requisicao->nome;
        $funcionario->sobrenome = $requisicao->sobrenome;
        $funcionario->sexo = $requisicao->sexo;
        $funcionario->email = $requisicao->email;

        $funcionario->save();

        return redirect('/ver_funcionarios');
    }

    public function ApagarFuncionario($id) {
        funcionario::destroy($id);
        session()->flash('success','O funcionario foi excluído com sucesso!');
        return redirect('/ver_funcionarios');
    }

    public function ver_doadores() {
        $dados = doador::all();
        return view('lista_cadastrados', compact('dados'));
    }   

    public function EditarDoador($id) {
        $dados = doador::where('id', $id)->first();
        $titulo = "Editar doador";
        return view('editar_doador', compact('dados', 'titulo'));
    }

    public function ApagarDoador($id) {
        doador::destroy($id);
        if (session()->get('usuario')[0]['user'] === "d") {
            session()->forget('user');
            session()->forget('usuario');
            session()->flash('success','Sua conta foi excluida com sucesso!');
            return redirect('login_doador');
        }
        session()->flash('success','O Doador foi excluido com sucesso!.');
        return redirect('/doadoresCadastrados');
    }

    public function AtualizarDoador(Request $requisicao) {
            
        $doador = doador::find($requisicao->id);
        $doador->nome = $requisicao->nome;
        $doador->sobrenome = $requisicao->sobrenome;
        $doador->cpf = $requisicao->cpf;
        $doador->data_nascimento = $requisicao->data_nascimento;
        $doador->sexo = $requisicao->sexo;
        $doador->email = $requisicao->email;
        $doador->profissao = $requisicao->profissao;
        $doador->cep = $requisicao->cep;
        $doador->rua = $requisicao->rua;
        $doador->numero = $requisicao->numero;
        $doador->bairro = $requisicao->bairro;
        $doador->cidade = $requisicao->cidade;
        $doador->referencia = $requisicao->referencia;
        $doador->tipo_sanguineo = $requisicao->tipo_sanguineo;

        $doador->save();
        $logado = "Master";
        return $this->ver_doadores();
    }
}   

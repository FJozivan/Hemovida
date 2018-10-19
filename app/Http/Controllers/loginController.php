<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doador;

class loginController extends Controller
{
    //
 
    public function FazerLogin() {
        $titulo = "Login";
        return view('login_doador', compact('titulo'));
    }

    public function logar(Request $requisicao) {

        // Apaga dados da sessão;
        $requisicao->session()->forget('user');

        // Verificação dos input

        $this->validate($requisicao,[
        
            'cpf' => 'required',
            'senha' => 'required'

        ]);
    	
        // Dados do banco

        $dados = doador::where('cpf', $requisicao->cpf)->first();

        if ($dados == null) {
            $titulo = "Login";
            $erro2 = "Não existe essa conta de usuário";
            return view('login_doador', compact('erro2','titulo'));

        }else{

            if ($dados->senha == md5($requisicao->senha)) {
                

                //$logado = $dados->nome;

                //Session
                $requisicao->session()->push('user', $dados);

                //return view('', compact('titulo','logado'));
                //return view('inicio_apos_login_doador', compact('dados'));

                // recuperar dados da session:
                // $user = session->get('user')[0];
                return view('inicio_apos_login_doador', compact('titulo','logado'));


            }else{
                $titulo = "Login";
                $erro2 = 'A senha deste usuario não confere!';
                return view('login_doador', compact('erro2','titulo'));
            }
        }
   
    }
}

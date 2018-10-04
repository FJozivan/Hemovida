<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doador;

class loginController extends Controller
{
    //
 
    public function FazerLogin() {
        $titulo = "Login";
        return view('login', compact('titulo'));
    }

    public function logar(Request $requisicao) {


        // Verificação dos inputa

        $this->validate($requisicao,[
        
            'cpf' => 'required',
            'senha' => 'required'

        ]);
    	
        // Dados do banco

        $dados = doador::where('cpf', $requisicao->cpf)->first();

        if ($dados == null) {
            $result = "Não existe essa conta de usuário";

        }else{

            if ($dados->senha== md5($requisicao->senha)) {

                $result = 'Login com sucesso!';

            }else{

                $result = 'A senha deste usuario não confere!';
            }
        }
        

        return $result;


        // $login = $requisicao->login;
    	// $senha = md5($requisicao->senha);
    	// //dd($login);
    	// $result = 0;

    	// if ($result > 0) {
    		
    	// }else{
    		
    	// 	$invalido = true;
    	// 	$titulo = 'Login';

    	// 	return view('login', compact('invalido','titulo'));
    	// }
    }
}

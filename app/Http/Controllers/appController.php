<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;

use App\Mail\emailHemovida;

class appController extends Controller
{
    public function enviarEmail(Request $requisicao){

    	$a = $requisicao->all();
    	$cont = 0;
    	foreach ($a as $ab => $value) {
    		if($ab != '_token'){
    			Mail::to("$value")->send(new emailHemovida());
				$cont++;
			}
		}
		$requisicao->session()->flash('success',$cont.' Email(s) enviado(s) com sucesso!');
		return redirect('/doadoresCadastrados');
			
    }
}

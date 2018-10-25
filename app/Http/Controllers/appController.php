<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

use App\Mail\emailHemovida;

class appController extends Controller
{
    public function enviarEmail(Request $requisicao){

    	$a = $requisicao->all();

    	foreach ($a as $ab => $value) {
    		if($ab != '_token')
    			Mail::to("$value")->send(new emailHemovida());
    	}
		return 'E-mails enviados com Sucesso!!!';
    }
}

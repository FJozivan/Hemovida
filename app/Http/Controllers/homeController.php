<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
 
    public function Home() {
        $titulo = "O Hemoce";
        return view('home', compact('titulo'));
    }

    public function Sobre() {
        $titulo = "Sobre Nós";
        return view('sobre', compact('titulo'));
    }

    //teste
    public function teste() {
        $titulo = "Teste Checbox";
        return view('testeCheckbox', compact('titulo'));
    }

    public function testeCheck(Request $requisicao){
    	
    	$a = $requisicao->all();
    	// for ($i=1; $i < count($a); $i++) { 
    	// 	echo $a[$i]	;
    	// }
    	foreach ($a as $ab => $value) {
    		if($ab != '_token')
    			echo $value."<br>";
    	}
    	

    }
}

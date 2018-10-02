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
}

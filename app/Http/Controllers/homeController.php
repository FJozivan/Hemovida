<?php

namespace App\Http\Controllers;

class homeController extends Controller
{
    //
 
    public function Home() {
        $titulo = "O Hemoce";
        return view('home', compact('titulo'));
    }
}

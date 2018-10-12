<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

use App\Mail\emailHemovida;

class appController extends Controller
{
    public function enviarEmail(){

        Mail::to('andra04@gmail.com')->send(new emailHemovida());
        
        return 'OK';
    }
}

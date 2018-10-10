<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class appController extends Controller
{
    public function enviarEmail(){
        Mail::to('hemovidaifce@gmail.com')->send(new emailHemovida());
        return 'OK';
    }
}

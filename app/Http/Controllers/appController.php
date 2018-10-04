<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request;
use Illuminate\Support\Facades\Mail;

class appController extends Controller
{
    public function enviarEmail(){
    	Mail::to('')
    }
}

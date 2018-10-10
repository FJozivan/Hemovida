<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'doadorController@ver_doadores');

Route::get('login', 'loginController@FazerLogin');

Route::get('cadastro_doador', 'doadorController@CadastroDoador');

Route::post('cadastrar_doador', 'doadorController@CadastrarDoador');

Route::post('logar', 'loginController@logar');

// Cadastro de funcionarios
Route::get('cadastro_funcionario', 'master_controller@Cadastro_funcionario');

// Envio de emails
Route::get('/enviar_mail', 'appController@enviarEmail');

///Route::get('doadores', 'doadorController@ver_doadores');
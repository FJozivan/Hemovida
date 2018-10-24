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

// Links do Menu
Route::get('/hemoce', 'homeController@Home');
Route::get('/sobre', 'homeController@Sobre');

// Login doador
Route::get('login_doador', 'loginController@FazerLogin');
Route::post('logar_doador', 'loginController@logar');//->middleware('login_doador');

// Cadastro doador
Route::get('cadastro_doador', 'doadorController@CadastroDoador');
Route::post('cadastrar_doador', 'doadorController@CadastrarDoador');

// Questionário doador
Route::get('questionario', 'doadorController@Questionario');

// Login funcionario
Route::get('login_hemoce', 'master_controller@FazerLogin');
Route::post('logar_hemoce', 'master_controller@logar');
Route::get('logout', 'master_controller@logout');

// Cadastro de funcionarios
Route::get('cadastro_funcionario', 'master_controller@Cadastro_funcionario')->middleware('login_hemoce');
Route::post('cadastrar_funcionario', 'master_controller@Cadastrar_funcionario')->middleware('login_hemoce');

// Ver funcionarios cadastrados
Route::get('ver_funcionarios', 'master_controller@ver_funcionarios')->middleware('login_hemoce');

// Envio de emails
Route::get('enviar_mail', 'appController@enviarEmail');

///Route::get('doadores', 'doadorController@ver_doadores');
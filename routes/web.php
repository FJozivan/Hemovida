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
// Links do Menu
Route::get('/', 'homeController@Home');
Route::get('/sobre', 'homeController@Sobre');


Route::get('teste', 'homeController@teste');
Route::post('testeCheck', 'homeController@testeCheck');

// Login doador
Route::get('login_doador', 'loginController@FazerLogin');
Route::post('logar_doador', 'loginController@logar');//->middleware('login_doador');
Route::get('logout_doador', 'loginController@logout');

// Cadastro doador
Route::get('/cadastro_doador', 'doadorController@CadastroDoador');
Route::post('cadastrar_doador', 'doadorController@CadastrarDoador');

Route::get('editar_doador/{id}', 'master_controller@EditarDoador');
Route::post('atualizar_doador', 'master_controller@AtualizarDoador');
Route::get('/apagar_doador/{id}', 'master_controller@ApagarDoador');

// Questionário doador
Route::get('questionario', 'doadorController@Questionario');

// Hemoce
Route::get('login_hemoce', 'master_controller@FazerLogin');
Route::post('logar_hemoce', 'master_controller@logar');
Route::get('logout_hemoce', 'master_controller@logout');

Route::get('/doadoresCadastrados', 'master_controller@ver_doadores');

// Cadastro de funcionarios
Route::get('/cadastro_funcionario', 'master_controller@Cadastro_funcionario')->middleware('login_hemoce');
Route::post('cadastrar_funcionario', 'master_controller@Cadastrar_funcionario')->middleware('login_hemoce');

// Ver funcionarios cadastrados
Route::get('/ver_funcionarios', 'master_controller@ver_funcionarios')->middleware('login_hemoce');
Route::get('editar_funcionario/{id}', 'master_controller@EditarFuncionario')->middleware('login_hemoce');
Route::post('atualizar_funcionario', 'master_controller@AtualizarFuncionario')->middleware('login_hemoce');
Route::get('/apagar_funcionario/{id}', 'master_controller@ApagarFuncionario')->middleware('login_hemoce');

// Envio de emails
Route::post('enviar_mail', 'appController@enviarEmail');

///Route::get('doadores', 'doadorController@ver_doadores');
@extends('layouts.app')
@section('titulo')
{{ $titulo }}
@stop
@section('cabecalho')
@extends('layouts.cabecalho')
@stop
@section('corpo')
<div class="container" style="background-color: white; border-radius: 10px; box-shadow: 0px 0px 0px 0.4px; margin-top: 10px; margin-bottom: 10px;">
    <div class="row" style="padding: 20px;">
        <h2 class="col-sm-12" style="color: #3232ff; text-align: center;"><strong>Sobre Nós</strong></h2>
        <p class="col-sm-12" style="margin-top: 20px;">O hemovida tem o intuito de aproximar os doadores do Hemoce, assim facilitando o contato com os novos e velhos doadores do instituto do Hemoce.</p>
        <p class="col-sm-12">Este trabalho foi realizado no período da cadeira de Engenharia de Software II orientado pela professora Andressa Bezerra do IFCE campus Crato</p>
        <p class="col-sm-12">Esta é a equipe que realizou esta página:</p>
        <hr class="col-sm-12">
        <div class="row justify-content-around col-sm-6">
            <h5 class="col-sm-12" style="text-align: center; margin-bottom: 20px;"><em><strong>Desenvolvedores:</strong></em></h5>
            <div class="card col-sm-5" style="width: 18rem;">
                <img class="card-img-top" src="./img/jozivan.gif" alt="Jozivan">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><strong>Jozivan</strong></p>
                </div>
            </div>
            <div class="card col-sm-5" style="width: 18rem;">
                <img class="card-img-top" src="./img/aderbal.gif" alt="Aderbal">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><strong>Aderbal</strong></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-around col-sm-6">
            <h5 class="col-sm-12" style="text-align: center; margin-bottom: 20px;"><em><strong>Testadores:</strong></em></h5>
            <div class="card col-sm-5" style="width: 18rem;">
                <img class="card-img-top" src="./img/daniele.gif" alt="Daniele Bernardo">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><strong>Daniele Bernardo</strong></p>
                </div>
            </div>
            <div class="card col-sm-5" style="width: 18rem;">
                <img class="card-img-top" src="./img/alex.gif" alt="Alex Nascimento">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><strong>Alex Nascimento</strong></p>
                </div>
            </div>
        </div>
        <hr class="col-sm-12">
        <div class="row justify-content-around col-sm-6">
            <h5 class="col-sm-12" style="text-align: center; margin-bottom: 20px;"><em><strong>Designers:</strong></em></h5>
            <div class="card col-sm-5" style="width: 18rem;">
                <img class="card-img-top" src="./img/ricardo.gif" alt="Ricardo Saraiva">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><strong>Ricardo Saraiva</strong></p>
                </div>
            </div>
            <div class="card col-sm-5" style="width: 18rem;">
                <img class="card-img-top" src="./img/vinicius.gif" alt="Vinícius">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><strong>Vinícius</strong></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-around col-sm-6">
            <h5 class="col-sm-12" style="text-align: center; margin-bottom: 20px;"><em><strong>Analista:</strong></em></h5>
            <div class="card col-sm-5" style="width: 18rem;">
                <img class="card-img-top" src="./img/silvia.gif" alt="Silvia">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><strong>Silvia</strong></p>
                </div>
            </div>
        </div>
        <hr class="col-sm-12">
        <div class="row justify-content-around col-sm-12">
            <h5 class="col-sm-12" style="text-align: center; margin-bottom: 20px;"><em><strong>Gerente:</strong></em></h5>
            <div class="card col-sm-3" style="width: 18rem;">
                <img class="card-img-top" src="./img/hilderlania.gif" alt="Hilderlania">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><strong>Hilderlania</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
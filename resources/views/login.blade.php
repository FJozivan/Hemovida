@extends('layouts.app')
@section('titulo')
{{ $titulo }}
@stop
@section('corpo')
<div class="container" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <img class="mt-1 mb-5" src="./img/hemovida.png" class="img-fluid" style="margin:auto; width: 300px;" />
            </div>
        </div>
    <div class="row">
        <div class="col-lg-3 col-sm-3"></div>
        <div class="col-lg-6 col-sm-3" style="background-color: white; border-radius: 10px; box-shadow: 0px 0px 1px; margin-top: 10px">

            <center><img class=" mb-3" src="./img/icone.jpg" class="img-fluid" style="margin:auto; width: 100px; border-radius: 50px; margin-top: -40px; box-shadow: 0px 0px 1px" /></center>
        
        {{-- @if (isset($invalido))
            <div style="border-radius: 10px">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Desculpe!</strong> Seus dados não conferem.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif --}}
        @if (count($errors) != 0)
            @foreach ($errors->all() as $erro)
                <div style="border-radius: 10px">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Sorry!</strong> {{ $erro }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endforeach
        @endif
                <form action="/logar" class="mt-3 mb-3 ml-5 mr-5" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" id="cpf" maxlength="14" name="cpf">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Senha:</label>
                        <input type="password" class="form-control" id="pwd" name="senha">
                    </div>
                    <div class="text-center">
                        <div class="custom-control custom-radio custom-control-inline" style="padding-right: 10px;">
                            <input type="radio" id="doador" name="acesso" class="custom-control-input">
                            <label class="custom-control-label" for="doador">Doador</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline mb-3">
                            <input type="radio" id="hemoce" name="acesso" class="custom-control-input">
                            <label class="custom-control-label" for="hemoce">Hemoce</label>
                        </div>    
                    </div>

                    <div class="mt-2 text-center">
                        <button type="submit" class="btn btn-info mr-2">Entrar</button>
                        <a href="/" class="btn btn-secondary ml-2">Cancelar</a>
                    </div>

                </form>    
            </div>

        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script>
        $(document).ready(function () { 
            var $seuCampoCpf = $("#cpf");
            $seuCampoCpf.mask('000.000.000-00', {reverse: true});
        });
    </script>
    @stop
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

            @if (count($errors) != 0)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <p> Campo(s) não preenchido(s):</p>
              <ul>
                @foreach ($errors->all() as $erros)
                <li> <strong> {{ $erros }} </strong> </li>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>


                @endforeach
            </ul>
        </div>
        @endif

        @if (isset($erro2))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong> {{ $erro2 }} </strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <form action="/logar_hemoce" class="mt-3 mb-3 ml-5 mr-5" method="post">
        @csrf

        <div class="form-group">
            <label for="numero_inscricao">N° inscrição:</label>
            <input type="text" class="form-control" id="numero_inscricao" maxlength="14" name="numero_inscricao" value="{{ old('numero_inscricao')}}">
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="text-center mt-2">
               
                <a href="/login_doador" class="btn btn-success btn-sm mr-2"><img class="" style="width: 20px" src="./img/power.svg"> Doador</a>

                <a href="#" class="btn btn-light disabled btn-sm ml-2"><img class="" style="width: 20px" src="./img/power.svg"> Hemoce</a>
        </div>
        <div class="mt-4 text-center">
            <button type="submit" class="btn btn-info btn-lg mr-2">Entrar</button>
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
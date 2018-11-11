@extends('layouts.app')
@section('titulo')
{{ $titulo }}
@stop
@section('cabecalho')
@extends('layouts.cabecalho')
@stop
@section('corpo')
<div class="container" style="background-color: white; border-radius: 10px; box-shadow: 0px 0px 0px 0.4px; padding: 20px; margin-top: 10px; margin-bottom: 10px;">
    <div class="row mt-5">

        <div class="text-justify col-lg-8 col-sm-12">
            <span>
                <h2 style="color: #a40000"><strong>O HEMOCE</strong></h2>
                <p>&nbsp&nbsp&nbsp&nbspOs Hemoces são instituições públicas (ou não) que realizam atividades de hemoterapia e hematologia com o objetivo de fornecer sangue (seus componentes e hemoderivados), aos hospitais que solicitarem, além do atendimento ambulatorial das patologias relacionadas com o sangue.</p>
                <p>&nbsp&nbsp&nbsp&nbspOs Hemocentros Públicos podem fornecer sangue aos hospitais privados quando houver necessidade e os Hemocentros Privados podem fornecer sangue aos hospitais da rede pública quando os bancos de sangue da rede pública estiverem com baixo estoque de sangue a ponto de impossibilitar o atendimento aos pacientes com doenças de sangue e os casos emergenciais que necessitam de sangue.</p>
            </span>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" style="" src="./img/Hemoce Crato.jpg"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" style="" src="./img/hemoce inauguracao - Copia.jpg"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" style="" src="./img/Hemoce Crato.jpg"/>
                            </div>
                        </div>
                        
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon" style=""></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                        
                    </div>        
                </div>
            </div>
        </div>
        
    </div>

    <div class="row mt-5">
        <div class="mt-4 col-lg-4 col-sm-12">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div id="carrosel_1" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#carrosel_1" data-slide-to="0" class="active"></li>
                            <li data-target="#carrosel_1" data-slide-to="1"></li>
                            <li data-target="#carrosel_1" data-slide-to="2"></li>
                        </ul>
                        
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" style="" src="./img/Hemoce Crato.jpg"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" style="" src="./img/Hemoce Crato.jpg"/>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" style="" src="./img/Hemoce Crato.jpg"/>
                            </div>
                        </div>
                        
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#carrosel_1" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#carrosel_1" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>  
                    </div>
                </div>
            </div>
        </div>
        <div class="text-justify col-lg-8 col-sm-12">
            <span class="">
                <h2 class="mt-4" style="color: #3232ff"><strong>Um Pouco de História</strong></h2>
                <p>&nbsp&nbsp&nbsp&nbspO centro de Hematologia e Hemoterapia do Ceará (Hemoce) faz parte da rede de unidades de saúde da Secretaria da Saúde do Estado do Ceará. Criado em 9 de março de 1979 e com início de funcionamento em 23 de novembro de 1983, por decisão do então Governador Adauto Bezerra, com respaldo na iniciativa do então Secretário de Saúde, Lúcio Alcântara. O Hemoce, desde quando foi concebido, teve por finalidade básica planejar e executar a política de sangue no Ceará.</p>
                <p>&nbsp&nbsp&nbsp&nbspA primeira coleta de sangue realizada pelo Hemoce ocorreu em maio de 1983, na Faculdade de Administração da UECE situada à rua 25 de Março-Centro, e o sangue colhido foi destinado ao Hospital Infantil Albert Sabin. Após a criação e pleno funcionamento do Hemocentro Coordenador de Fortaleza, foi definido como objetivo primordial de atuação a cobertura em Hemoterapia e Hematologia a todo o território estadual.</p>
                <p>&nbsp&nbsp&nbspDesta forma, a partir da década de 90, foram inaugurados os Hemocentros Regionais: o Hemocentro de Sobral em 8 de março de 1991, o de Crato em 19 de dezembro de 1991, o hemonúcleo de Juazeiro do Norte em 28 de julho de 1998, o de Iguatu em 23 de agosto de 1993 e o de Quixadá em 10 de setembro de 2004. Cada um destes hemocentros regionais foi instalado e está em pleno funcionamento com capacidade para captar, triar doadores, coletar, processar e distribuir sangue e hemocomponentes examinados e aptos para transfusão nos hospitais de sua área de cobertura.</p>
            </span>    
        </div>
    </div>
</div>
@stop
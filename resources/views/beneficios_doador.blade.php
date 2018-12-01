@extends('layouts.app')
@section('titulo')
{{ $titulo }}
@stop
@section('cabecalho')
@extends('layouts.cabecalho')
@stop
@section('corpo')
<div class="mt-3" style="color: transparent">.</div>
<div class="container mt-4" style="background-color: white; border-radius: 10px; box-shadow: 0px 0px 0px 0.4px; margin-top: 10px; margin-bottom: 10px;">
    <div class="row mr-2 ml-2">
        <h2 class="col-sm-12 mt-2" style="text-align: center; color: #3232ff;">Benefícios</h2>
        <div class="container-fluid">
            <div class="row">
                <img class="img-fluid col-md-3" style="max-height: 75px; margin-top: 20px; border-radius: 5px; display: block; margin-left: auto; margin-right: auto;" src="./img/voce_sabia.jpg"/>
            </div>
        </div>
        <img class="img-fluid col-md-4" style="max-height: 200px; margin-top: 20px; border-radius: 5px; display: block; margin-left: auto; margin-right: auto;" src="./img/doar_salva.png"/>
        <p class="mt-5 col-md-8" style="text-align: justify;">Há muitos anos o hemoce vem desempenhando um papel importantíssimo na sociedade brasileira, que conhece bem a importância do hemoce aliado a solidariedade da população. A  instituição conseguiu no último ano mais de 100 mil doações, o que prova que as pessoas  colaboram por diversos motivos principalmente devido a possibilidade de salvar vidas com um simples gesto,porém, muitos doadores não sabem que esse gesto, pode trazer benefícios para o doador, pois quem doa saúde também recebe saúde.</p>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Coração mais saudável</h2>
        <p class="mt-5 col-md-8" style="text-align: justify;">O ferro é essencial para o bom funcionamento do corpo, porém, o acúmulo desse elemento pode ocasionar o estresse oxidativo, uma condição relacionada ao surgimento de diversos problemas de saúde, como o Parkinson, o Alzheimer e a aterosclerose. Além disso, estudos revelaram que o excesso de ferro pode aumentar o risco de derrames e ataques cardíacos. Pois as doações regulares podem ajudar a manter os níveis de ferro sob controle, especialmente em homens.</p>
        <img class="img-fluid col-md-4" style="max-height: 200px; border-radius: 5px; display: block; margin-left: auto; margin-right: auto;" src="./img/health_heart.jpg"/>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Menor risco de desenvolver câncer</h2>
        <img class="img-fluid col-md-4 mt-1" style="max-height: 200px; border-radius: 5px; display: block; margin-left: auto; margin-right: auto;" src="./img/cancer.jpg"/>
        <p class="mt-5 col-md-8" style="text-align: justify;">Além do estresse oxidativo o excesso de ferro pode levar ao surgimento de alguns tipos de câncer, como o de intestino, o de pulmão e o de fígado. Portanto, as doações regulares também ajudam a evitar que essas terríveis doenças se desenvolvam, pois mantêm os níveis de ferro em equilíbrio.</p>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Queima de calorias</h2>
        <p class="mt-5 col-md-8" style="text-align: justify;">Uma simples doação de sangue pode levar à queima de 650 calorias, a prática regular é recomendada a pessoas que estão tentando perder peso, porém, é importante lembrar que o doador precisa estar com a saúde em dia e ter níveis saudáveis de ferro no organismo, e principalmente respeitar o intervalo mínimo entre as doações que varia de 2 a 3 meses.</p>
        <img class="img-fluid col-md-4" style="max-height: 200px; border-radius: 5px; display: block; margin-left: auto; margin-right: auto;" src="./img/queima_calorias.jpg"/>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Fígado Protegido</h2>
        <img class="img-fluid col-md-4 mt-3" style="max-height: 200px; border-radius: 5px; display: block; margin-left: auto; margin-right: auto;" src="./img/figado_protegido.jpg"/>
        <p class="mt-5 col-md-8" style="text-align: justify;">O fígado, tem uma porção de funções importantes no nosso organismo, entre elas ajudar a processar proteínas, vitaminas, minerais, gorduras e carboidratos e converter a glicose em glicogênio, a principal reserva de energia das células, bem como auxiliar em seu armazenamento. O órgão também atua na purificação do sangue e na síntese de proteínas plasmáticas e agentes coagulantes. O fígado junto com o pâncreas, absorve e armazena o excesso de ferro. Assim, as doações regulares ajudam a evitar problemas como a cirrose e a insuficiência hepática.</p>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Melhor fluxo sanguíneo</h2>
        <div class="mt-1 col-md-8" style="text-align: justify;">
            <p>Estudos apontaram que questões como estresse, ansiedade, dietas ricas em açúcares, altos índices de ácido úrico, colesterol elevado, tabagismo etc. podem contribuir para a hipercoagulação do sangue, isto é, torná-lo mais “grosso” e menos fluido. Isso, por sua vez, pode levar a um maior risco de tromboses e derrames, assim como inflamações, já que o fluxo reduzido evita que o oxigênio chegue a todos os tecidos como deveria.</p>
            <p>Entretanto, pesquisas revelaram que as doações frequentes podem ajudar o sangue a fluir melhor e prevenir o entupimento de artérias e danos às paredes internas de vasos sanguíneos. Além disso, as estatísticas sugerem que os doadores de sangue são hospitalizados com menos frequência e recebem alta mais depressa do que os não doadores.</p>
        </div>
        <img class="img-fluid col-md-4 mt-4" style="max-height: 200px; border-radius: 5px; display: block; margin-left: auto; margin-right: auto;" src="./img/fluxo_sangue.jpg"/>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Check-up completo</h2>
        <img class="img-fluid col-md-4" style="max-height: 200px; border-radius: 5px; display: block; margin-left: auto; margin-right: auto;" src="./img/check_up.jpg"/>
        <p class="mt-5 col-md-8" style="text-align: justify;">Além dos benefícios citados acima, o Hemoce dá direito a inúmeros exames que são realizados periodicamente, caso seja encontrado algum problema sanguíneo, como hemofilia, coagulopatias hereditárias, etc, a instituição oferece tratamento e  acompanhamento com profissionais especializados.</p>
    </div>

    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Além do que foi falado, veja outros benefícios:</h2>
        <ul class="col-sm-6 ml-4 mt-5" style="text-align: justify;">
            <li>Responsabilidade social;</li><br>
            <li>Solidariedade, responsabilidade, altruísmo;</li><br>
            <li>A manutenção do estoque regular do hemocentro regional (Cariri - 28 cidades - confira o mapa ao lado);</li><br>
            <li>Manutenção do ciclo de responsabilidade;</li><br>
            <li>1 única doação (bolsa) pode salvar até 4 vidas (hemocomponentes): Plaquetas, Plasma, Crio e Hemácias;</li><br>
            <li>Lembrando sempre que o sangue não pode ser fabricado em laboratório ou comprado direta ou indiretamente.</li><br>
        </ul>
        <img class="img-fluid col-md-6" style="max-height: 500px; max-width: 450px; border-radius: 5px; display: block; margin-left: auto; margin-right: auto;" src="./img/mapa_hemo.jpeg"/>   
    </div>
    
    <div class="row mr-2 ml-2 mt-4 mb-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Relembre os requisitos básicos para a doação</h2>
        <ul class="col-sm-12 ml-4 mt-2" style="text-align: justify;">
            <li>Pesar no mínimo 50 quilos;</li>
            <li>Estar em boas condições de saúde;</li>
            <li>Ter dormido pelo menos 6 horas nas últimas 24 horas;</li>
            <li>Estar alimentado;</li>
            <li>Ter entre 16 e 69 anos de idade — lembrando que os menores de 18 anos precisam de autorização para doar;</li>
            <li>Apresentar documento original com foto recente;</li>
            <li>Respeitar o intervalo mínimo entre as doações — 2 meses para os homens e 3 para as mulheres.</li>
        </ul>
    </div>

</div>
@stop
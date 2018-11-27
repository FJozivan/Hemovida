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
        <img class="img-fluid col-md-4" style="max-height: 200px; margin-top: 20px; border-radius: 5px; display: block; margin-left: auto; margin-right: auto;" src="./img/por-que-doar.jpg"/>
        <p class="mt-5 col-md-8" style="text-align: justify;">A doação de sangue é um ato altruísta e totalmente voluntário, que pode salvar vidas. Dependem desse ato solidário pessoas que se submetem a tratamentos planejados e intervenções médicas urgentes de grande porte e complexidade, como transfusões, transplantes e intervenções oncológicas. O sangue é imprescindível também para que pacientes com doenças crônicas graves - como Doença Falciforme e Talassemia - possam viver por mais tempo e com mais qualidade, além de ser de vital importância para tratar feridos em situações de emergência ou calamidades.</p>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">A importância da doação de sangue</h2>
        <p class="mt-5 col-md-8" style="text-align: justify;">Como o sangue é insubstituível e sem ele não é possível viver, o Ministério da Saúde reforça a importância de os brasileiros adotarem a cultura solidária da doação regular e espontânea de sangue. O objetivo é manter os estoques sempre abastecidos e não apenas em datas específicas ou quando algum conhecido precisar. Uma única doação pode salvar a vida de até quatro pessoas e beneficiar qualquer paciente, independentemente de parentesco entre o doador e quem receberá a doação.</p>
        <img class="img-fluid col-md-4" style="max-height: 200px; margin-top: 20px; border-radius: 5px; display: block; margin-left: auto; margin-right: auto;" src="./img/salva-vidas.jpg"/>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Quem doa para quem?</h2>
        <img class="img-fluid col-sm-9" style="max-height: 400px; margin-top: 20px; border-radius: 5px; display: block; margin-left: auto; margin-right: auto;" src="./img/doacao.png"/>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Impedimentos temporários</h2>
        <ul class="mt-2">
            <li>Gripe, resfriado e febre: aguardar 7 dias após o desaparecimento dos sintomas;</li>
            <li>Período gestacional;</li>
            <li>Período pós-gravidez: 90 dias para parto normal e 180 dias para cesariana;</li>
            <li>Amamentação: até 12 meses após o parto;</li>
            <li>Ingestão de bebida alcoólica nas 12 horas que antecedem a doação;</li>
            <li>Tatuagem e/ou piercing nos últimos 6 meses (piercing em cavidade oral ou região genital impedem a doação);</li>
            <li>Extração dentária: 72 horas;</li>
            <li>Apendicite, hérnia, amigdalectomia, varizes: 3 meses;</li>
            <li>Colecistectomia, histerectomia, nefrectomia, redução de fraturas, politraumatismos sem sequelas graves, tireoidectomia, colectomia: 6 meses;</li>
            <li>Transfusão de sangue: 1 ano;</li>
            <li>Vacinação: o tempo de impedimento varia de acordo com o tipo de vacina;</li>
            <li>Exames/procedimentos com utilização de endoscópio nos últimos 6 meses;</li>
            <li>Ter sido exposto a situações de risco acrescido para infecções sexualmente transmissíveis (aguardar 12 meses após a exposição).</li>
        </ul>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Impedimentos definitivos</h2>
        <ul class="mt-2">
            <li>Ter passado por um quadro de hepatite após os 11 anos de idade;</li>
            <li>Evidência clínica ou laboratorial das seguintes doenças transmissíveis pelo sangue:  Hepatites B e C, AIDS (vírus HIV), doenças associadas aos vírus HTLV I e II e Doença de Chagas;</li>
            <li>Uso de drogas ilícitas injetáveis;</li>
            <li>Malária.</li>
        </ul>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Pergunta e respostas</h2>
        <div class="accordion col-sm-12 mt-2" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            É seguro doar sangue?
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Sim, doar sangue é totalmente seguro. Não há nenhum risco de contaminação durante a doação de sangue, pois todos os materiais utilizados para doação de sangue são descartáveis e de uso único.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Quanto tempo dura a doação de sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        O procedimento todo (cadastro, aferição de sinais vitais, teste de anemia, triagem clínica, coleta do sangue e lanche) leva cerca de 40 minutos.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Quanto tempo leva para o organismo repor o sangue doado?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        O organismo repõe o volume de sangue doado nas primeiras 24 horas após a doação.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            É necessário estar em jejum para doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        O doador não deve estar em jejum de nenhuma forma; ele deve estar alimentado e descansado, evitando alimentação gordurosa nas 3 horas que antecedem a doação.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            O que é feito com o sangue doado?
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        Após a coleta, a bolsa de sangue é separada em componentes sanguíneos (concentrado de hemácias, de plaquetas e plasma). Esses componentes são liberados para uso somente após o resultado dos exames. As unidades que apresentam reatividade sorológica são descartadas. Uma única unidade doada pode beneficiar até quatro vidas.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Existe algum benefício em doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body">
                        Sim. O benefício para o doador é a satisfação de ajudar pessoas que não têm outra opção para a saúde - a não ser o sangue doado - e dependem de pessoas solidárias para seguir com a vida.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            O que é sangue raro?
                        </button>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                    <div class="card-body">
                        É um sangue com característica específica de baixa frequência na população e, algumas vezes, pode ser uma característica familiar.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingEight">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Quem doa sangue tem atestado médico?
                        </button>
                    </h5>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                    <div class="card-body">
                        O inciso IV do artigo 473 da CLT (Consolidação das Leis do Trabalho) dispõe que o empregado poderá deixar de comparecer ao serviço, sem prejuízo do salário, por um dia, a cada 12 meses, em caso de doação voluntária de sangue devidamente comprovada.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingNine">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Serei avisado se houver alteração no resultado dos exames com o sangue que doei?
                        </button>
                    </h5>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                    <div class="card-body">
                        O doador será comunicado em caso de alteração nos resultados dos exames realizados para orientação e/ou coleta de nova amostra.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTen">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            É preciso documento de identidade para doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                    <div class="card-body">
                        Sim. O candidato deve apresentar documento original com foto expedido por órgão oficial. Exemplos: Carteira de Identidade (RG ou RNE), Passaporte, Carteira de Trabalho, Carteira de Identidade de Profissional, Carteira Nacional de Habilitação com foto e Certificado de Reservista.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Mitos e Verdades</h2>
        <div class="accordion col-sm-12 mt-2" id="accordionExample2">
            <div class="card">
                <div class="card-header" id="headingEleven">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                            Pode doar menstruada?
                        </button>
                    </h5>
                </div>

                <div id="collapseEleven" class="collapse show" aria-labelledby="headingEleven" data-parent="#accordionExample2">
                    <div class="card-body">
                        Sim. Não há nenhum problema quanto a isso.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwelve">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            Doar sangue engrossa ou afina o sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample2">
                    <div class="card-body">
                        Não engrossa nem afina o sangue. Isso é um mito.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThirteen">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                            Doar sangue engorda ou emagrece?
                        </button>
                    </h5>
                </div>
                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample2">
                    <div class="card-body">
                        Não engorda nem emagrece.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFourteen">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                            Doar sangue vicia?
                        </button>
                    </h5>
                </div>
                <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample2">
                    <div class="card-body">
                        Não. A doação de sangue não está relacionada a nenhum tipo de dependência.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFifteen">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                            Quem está fazendo regime para emagrecer pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordionExample2">
                    <div class="card-body">
                        Sim. Dietas para emagrecimento não impedem a doação de sangue, desde que a perda de peso não tenha comprometido a saúde do doador.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSixteen">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                            Grávidas podem doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordionExample2">
                    <div class="card-body">
                        Não, mas após o período gestacional, em casos de parto normal, a mulher pode doar depois de três meses; em caso de cesariana, após seis meses. Se estiver amamentando, a mulher deve aguardar 12 meses após o parto.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSeventeen">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                            Quem fuma pode doar?
                        </button>
                    </h5>
                </div>
                <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordionExample2">
                    <div class="card-body">
                        Sim, mas é recomendável um intervalo sem fumar de pelo menos 2 horas antes.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingEightteen">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEightteen" aria-expanded="false" aria-controls="collapseEightteen">
                            Quem tem tatuagem pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseEightteen" class="collapse" aria-labelledby="headingEightteen" data-parent="#accordionExample2">
                    <div class="card-body">
                        Sim, desde que tenha feito a tatuagem há mais de um ano.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingNineteen">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                            Quem recebeu transfusão de sangue pode ser doador de sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordionExample2">
                    <div class="card-body">
                        Sim. Quem recebeu transfusão de sangue pode doar sangue, mas precisa esperar um ano para fazer a doação. Quem recebeu transfusão de sangue há menos de 12 meses pode estar ainda no período em que as doenças nem sempre são detectadas nos exames; por isso fica temporariamente impedido de doar sangue.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwenty">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                            Quem doa sangue uma vez é obrigado a doar sempre?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordionExample2">
                    <div class="card-body">
                        Não. Doar sangue não cria dependência no organismo da pessoa. É um ato voluntário, que só depende do desejo de a pessoa voltar ao Hemocentro dentro do prazo mínimo de espera para fazer mais de uma doação.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwentyOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
                            A quantidade de sangue coletada a cada doação vai afetar minha saúde?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwentyOne" class="collapse" aria-labelledby="headingTwentyOne" data-parent="#accordionExample2">
                    <div class="card-body">
                        Não. O volume coletado não ultrapassa 10-15% da quantidade de sangue que o doador possui. Esse volume é reposto em até 24 horas após a doação.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwentyTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                            Há risco de contaminação durante a doação de sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwentyTwo" class="collapse" aria-labelledby="headingTwentyTwo" data-parent="#accordionExample2">
                    <div class="card-body">
                        Não há nenhum risco de contaminação durante a doação de sangue, pois todos os materiais utilizados para doação de sangue são descartáveis e de uso único.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwentyThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyThree" aria-expanded="false" aria-controls="collapseTwentyThree">
                            Há substituto para o sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwentyThree" class="collapse" aria-labelledby="headingTwentyThree" data-parent="#accordionExample2">
                    <div class="card-body">
                        Não. Mesmo com toda evolução tecnológica e científica, ainda não há um substituto para o sangue. O sangue é insubstituível.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Tratamentos/Medicamentos</h2>
        <div class="accordion col-sm-12 mt-2" id="accordionExample3">
            <div class="card">
                <div class="card-header" id="headingTwentyFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwentyFour" aria-expanded="true" aria-controls="collapseTwentyFour">
                            O uso de medicamento pode impedir alguém de doar sangue?
                        </button>
                    </h5>
                </div>

                <div id="collapseTwentyFour" class="collapse show" aria-labelledby="headingTwentyFour" data-parent="#accordionExample3">
                    <div class="card-body">
                        O uso de medicamento deve ser analisado caso a caso. Antes de doar, a pessoa deve consultar o Serviço de Hemoterapia e, durante a triagem, informar sobre o medicamento em uso ou já usado.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwentyFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyFive" aria-expanded="false" aria-controls="collapseTwentyFive">
                            Quem tomou analgésico pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwentyFive" class="collapse" aria-labelledby="headingTwentyFive" data-parent="#accordionExample3">
                    <div class="card-body">
                        Sim, mas é importante que, no dia da doação, o doador esteja sem dores.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwentySix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentySix" aria-expanded="false" aria-controls="collapseTwentySix">
                            Tomei vacina para Hepatite B. Posso doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwentySix" class="collapse" aria-labelledby="headingTwentySix" data-parent="#accordionExample3">
                    <div class="card-body">
                        A vacinação para Hepatite B impede a doação por 48 horas.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwentySeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentySeven" aria-expanded="false" aria-controls="collapseTwentySeven">
                            Quem estiver em tratamento com anti-inflamatório pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwentySeven" class="collapse" aria-labelledby="headingTwentySeven" data-parent="#accordionExample3">
                    <div class="card-body">
                        Dependendo do motivo, a doação pode ser realizada normalmente. Não se esqueça de informar ao Serviço de Hemoterapia, durante a triagem, o nome do anti-inflamatório que você está tomando.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwentyEight">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyEight" aria-expanded="false" aria-controls="collapseTwentyEight">
                            Quem estiver fazendo tratamento com algum antibiótico pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwentyEight" class="collapse" aria-labelledby="headingTwentyEight" data-parent="#accordionExample3">
                    <div class="card-body">
                        Depende da razão pela qual a pessoa está tomando antibióticos. Em linhas gerais, para infecções simples e sem complicações, o doador deve aguardar 15 dias após a última dose do antibiótico para doar sangue. Infecções mais graves, como pneumonia, meningite, entre outras, podem demandar um tempo maior para liberação do candidato à doação.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwentyNine">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyNine" aria-expanded="false" aria-controls="collapseTwentyNine">
                            Quem faz tratamento para acne pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwentyNine" class="collapse" aria-labelledby="headingTwentyNine" data-parent="#accordionExample3">
                    <div class="card-body">
                        Depende do tipo de tratamento. Caso o tratamento inclua o uso de antibióticos ou outros remédios de uso oral, não será possível doar.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThirty">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirty" aria-expanded="false" aria-controls="collapseThirty">
                            Quem estiver fazendo tratamento homeopático pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseThirty" class="collapse" aria-labelledby="headingThirty" data-parent="#accordionExample3">
                    <div class="card-body">
                        Sim.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mr-2 ml-2 mt-4">
        <h2 class="col-sm-12" style="text-align: center; color: #3232ff;">Doenças</h2>
        <div class="accordion col-sm-12 mt-2 mb-4" id="accordionExample4">
            <div class="card">
                <div class="card-header" id="headingThirtyOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThirtyOne" aria-expanded="true" aria-controls="collapseThirtyOne">
                            Quem já teve sífilis pode doar sangue?
                        </button>
                    </h5>
                </div>

                <div id="collapseThirtyOne" class="collapse show" aria-labelledby="headingThirtyOne" data-parent="#accordionExample4">
                    <div class="card-body">
                        Sim, desde que tenha feito o tratamento completo e espere 12 meses para fazer a doação. O teste para detectar sífilis e outras doenças transmissíveis pelo sangue serve como triagem para a doação.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThirtyTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirtyTwo" aria-expanded="false" aria-controls="collapseThirtyTwo">
                            Quem teve meningite bacteriana pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseThirtyTwo" class="collapse" aria-labelledby="headingThirtyTwo" data-parent="#accordionExample4">
                    <div class="card-body">
                        Sim, porém é preciso esperar 6 meses após a cura total da meningite e não ter tido nenhuma sequela.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThirtyThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirtyThree" aria-expanded="false" aria-controls="collapseThirtyThree">
                            Quem tem Papiloma Vírus pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseThirtyThree" class="collapse" aria-labelledby="headingThirtyThree" data-parent="#accordionExample4">
                    <div class="card-body">
                        Sim. Embora a doença HPV seja sexualmente transmissível, ela não impede a doação de sangue.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThirtyFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirtyFour" aria-expanded="false" aria-controls="collapseThirtyFour">
                            Quem já teve câncer pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseThirtyFour" class="collapse" aria-labelledby="headingThirtyFour" data-parent="#accordionExample4">
                    <div class="card-body">
                        Não. Quem teve ou tem câncer, inclusive leucemia, não pode doar sangue.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThirtyFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirtyFive" aria-expanded="false" aria-controls="collapseThirtyFive">
                            Hipertenso pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseThirtyFive" class="collapse" aria-labelledby="headingThirtyFive" data-parent="#accordionExample4">
                    <div class="card-body">
                        Os hipertensos poderão doar sangue se estiverem em uso de medicamento que não contraindique por si só a doação. Será necessário que o candidato à doação apresente relatório do seu médico assistente, comprovando o controle clínico adequado. No dia da doação, a pressão arterial será aferida e a doação apenas será realizada se a máxima estiver abaixo de 140mmHg e a mínima abaixo de 90 mmHg.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThirtySix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirtySix" aria-expanded="false" aria-controls="collapseThirtySix">
                            Quem tem diabetes pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseThirtySix" class="collapse" aria-labelledby="headingThirtySix" data-parent="#accordionExample4">
                    <div class="card-body">
                        Poderá doar se a pessoa com diabetes estiver controlando a doença apenas com alimentação ou hipoglicemiantes orais e não apresentar alterações vasculares. Caso tenha utilizado insulina uma única vez, não poderá doar.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThirtySeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirtySeven" aria-expanded="false" aria-controls="collapseThirtySeven">
                            Podem doar sangue pessoas resfriadas?
                        </button>
                    </h5>
                </div>
                <div id="collapseThirtySeven" class="collapse" aria-labelledby="headingThirtySeven" data-parent="#accordionExample4">
                    <div class="card-body">
                        O candidato à doação de sangue deve estar em boas condições de saúde. Nas estações Outono e Inverno, quando normalmente há aumento no número de casos de gripes e resfriados, deve-se aguardar sete dias contados a partir do desaparecimento dos sintomas para realizar a doação, caso não haja febre.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThirtyEight">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirtyEight" aria-expanded="false" aria-controls="collapseThirtyEight">
                            Quem está gripado pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseThirtyEight" class="collapse" aria-labelledby="headingThirtyEight" data-parent="#accordionExample4">
                    <div class="card-body">
                        Recomenda-se aguardar 7 dias após a cura para da gripe para, então, fazer a doação.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThirtyNine">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirtyNine" aria-expanded="false" aria-controls="collapseThirtyNine">
                            Quem está com anemia pode doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseThirtyNine" class="collapse" aria-labelledby="headingThirtyNine" data-parent="#accordionExample4">
                    <div class="card-body">
                        Pode doar a pessoa que apresentar hematócrito maior que 39% (ou hemoglobina maior que 13g/dL) no homem e 38% (ou hemoglobina maior que 12,5 g/dL) na mulher. Esse limite é necessário para não causar prejuízos à saúde do doador e permitir a coleta da quantidade de sangue estipulada como uma unidade (dose) para um adulto.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingForty">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseForty" aria-expanded="false" aria-controls="collapseForty">
                            O que acontece se uma pessoa que não sabe estar anêmica quiser doar sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseForty" class="collapse" aria-labelledby="headingForty" data-parent="#accordionExample4">
                    <div class="card-body">
                        O candidato à doação é atendido por um profissional do Serviço de Hemoterapia, que realiza um teste rápido para verificar se o doador está ou não anêmico.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFortyOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFortyOne" aria-expanded="false" aria-controls="collapseFortyOne">
                            O que são situações de risco acrescido para se transmitir doenças por meio da doação de sangue?
                        </button>
                    </h5>
                </div>
                <div id="collapseFortyOne" class="collapse" aria-labelledby="headingFortyOne" data-parent="#accordionExample4">
                    <div class="card-body">
                        Ter múltiplos parceiros sexuais ocasionais ou eventuais sem uso de preservativo, usar drogas ilícitas, ter feito sexo em troca de dinheiro ou droga, ter sido vítima de estupro, ser parceiro sexual de pessoa que tenha exame reagente para infecções de transmissão sexual e sanguínea, ter parceiro sexual que pertença a alguma das situações acima, dentre outros.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
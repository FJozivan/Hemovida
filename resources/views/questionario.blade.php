@extends('layouts.app')
@section('titulo')
{{ $titulo }}
@stop
@section('cabecalho')
@extends('layouts.cabecalho')
@stop
@section('corpo')
<div class="container-fluid mb-5" style="background-color: #182E47; margin-top: 80px;">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-">
			<div class="container" style="background-color: white; border-radius: 10px; box-shadow: 0px 0px 0px 0.4px;">
                <div class="row">
                    <div class="col-xl-12">
                        <center>
                            <h5 style="margin-top: 20px; font-family: 'Raleway', sans-serif; color: red;">
                                QUESTIONÁRIO
                            </h5>
                            <hr style="background-color: red; margin-top: 5px">
                        </center>
                    </div>
                </div>

                <div class="row">
                    <div class="container">
                        <div class="col-lg-12 mb-3">
                            
                            {{-- @if (count($errors) != 0)
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <p>Campo(s) obrigatorio(s):</p>
                                <ul>
                                    @foreach ($errors->all() as $erro)
                                    <div style="border-radius: 10px">
                                        <li>{{ $erro }}</li>
                                        @endforeach
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </ul>
                                </div>
                                @endif --}}
                                <form method="POST" action="enviar_questionario">
                                    {{ csrf_field() }}
                                    <div class="container font">
                                        <div class="col-lg-12 col-sm-12">
                                            <p style="margin-left: -25px;">ESCOLHA UMA DAS OPÇÕES A SEGUIR</p>
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="peso" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Você tem peso inferior a 50 kilos?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="pesosim" name="peso" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="pesosim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="pesonao" name="peso" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="pesonao">Não</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-6">
                                                <label for="gravidez" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;">(Sexo feminino) Você está grávida?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="gravidezsim" name="gravidez" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="gravidezsim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="gravideznao" name="gravidez" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="gravideznao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="amamentando" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;">(Sexo feminino) Está amamentando?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="amamentandosim" name="amamentando" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="amamentandosim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="amamentandonao" name="amamentando" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="amamentandonao">Não</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-6">
                                                <label for="parto" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;">(Sexo feminino) O parto ocorreu há mais de 12 meses?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="partosim" name="parto" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="partosim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="partonao" name="parto" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="partonao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="hiv" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Tem ou teve um teste positivo para HIV?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="hivsim" name="hiv" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="hivsim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="hivnao" name="hiv" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="hivnao">Não</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-6">
                                                <label for="hepatite" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Teve hepatite após os 10 anos de idade?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="hepatitesim" name="hepatite" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="hepatitesim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="hepatitenao" name="hepatite" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="hepatitenao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="malaria" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Já teve malária?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="malariasim" name="malaria" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="malariasim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="malarianao" name="malaria" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="malarianao">Não</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-6">
                                                <label for="chagas" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Tem doença de chagas?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="chagassim" name="chagas" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="chagassim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="chagasnao" name="chagas" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="chagasnao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="duramater" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Recebeu enxerto de duramater?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="duramatersim" name="duramater" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="duramatersim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="duramaternao" name="duramater" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="duramaternao">Não</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-6">
                                                <label for="cancer" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Teve algum tipo de câncer, incluindo leucemia?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="cancersim" name="cancer" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="cancersim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="cancernao" name="cancer" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="cancernao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="problemas" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Tem graves problemas no pulmão, coração, rins ou fígado?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="problemassim" name="problemas" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="problemassim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="problemasnao" name="problemas" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="problemasnao">Não</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-6">
                                                <label for="coagulacao" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Tem problema de coagulação de sangue?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="coagulacaosim" name="coagulacao" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="coagulacaosim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="coagulacaonao" name="coagulacao" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="coagulacaonao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="diabetes" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> É diabético com complicações vasculares ou em uso de insulina?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="diabetessim" name="diabetes" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="diabetessim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="diabetesnao" name="diabetes" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="diabetesnao">Não</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-6">
                                                <label for="tuberculose" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Teve tuberculose extra-pulmonar?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="tuberculosesim" name="tuberculose" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="tuberculosesim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="tuberculosenao" name="tuberculose" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="tuberculosenao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="elefantiase" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Já teve elefantíase?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="elefantiasesim" name="elefantiase" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="elefantiasesim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="elefantiasenao" name="elefantiase" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="elefantiasenao">Não</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-6">
                                                <label for="hanseniase" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> já teve hanseníase?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="hanseniasesim" name="hanseniase" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="hanseniasesim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="hanseniasenao" name="hanseniase" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="hanseniasenao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="calazar" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Já teve calazar (leishmaniose visceral)?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="calazarsim" name="calazar" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="calazarsim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="calazarnao" name="calazar" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="calazarnao">Não</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-6">
                                                <label for="brucelose" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Já teve brucelose?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="brucelosesim" name="brucelose" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="brucelosesim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="brucelosenao" name="brucelose" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="brucelosenao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="esquistossomose" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Já teve esquistossomose hepatoesplênica?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="esquistossomosesim" name="esquistossomose" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="esquistossomosesim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="esquistossomosenao" name="esquistossomose" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="esquistossomosenao">Não</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-6">
                                                <label for="inimputabilidade" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Tem alguma doença que gere inimputabilidade jurídica?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="inimputabilidadesim" name="inimputabilidade" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="inimputabilidadesim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="inimputabilidadenao" name="inimputabilidade" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="inimputabilidadenao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="transplante" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Foi submetido a transplante de órgãos ou de medula?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="transplantesim" name="transplante" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="transplantesim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="transplantenao" name="transplante" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="transplantenao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-12" style="margin-top: 20px;">
                                            <p style="margin-left: -25px;">VACINA</p>
                                        </div>

                                        <div class="form-group row">
                                            <label for="vacina" class="col-md-5 col-form-label" style="text-align: left;">Nas últimas 48h você foi vacinado? Se sim qual?</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="vacina" name="vacina">
                                            </div>
                                            <small class="col-sm-12" style="text-align: left;">(Ex:cólera, poliomielite (salk), difteria, tétano, febre tifóide (injetável), meningite, coqueluche, pneumococo. gripe)</small>
                                        </div>

                                        <div class="col-lg-12 col-sm-12" style="margin-top: 20px;">
                                            <p style="margin-left: -25px;">MÚLTIPLA ESCOLHA</p>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sintomas" class="col-sm-12 col-form-label" style="text-align: left;">Nos últimos 7 dias você sentiu algum dessas doenças?</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="diarreia">
                                                <label class="form-check-label" for="inlineCheckbox1">Diarréia</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="resfriado">
                                                <label class="form-check-label" for="inlineCheckbox2">Gripe ou resfriado</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="conjuntivite">
                                                <label class="form-check-label" for="inlineCheckbox3">Conjuntivite</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="extracao_dentaria">
                                                <label class="form-check-label" for="inlineCheckbox4">Extração dentária (verificar uso de medicação)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="canal">
                                                <label class="form-check-label" for="inlineCheckbox5">Tratamento de canal (verificar medicação)</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sintomas" class="col-sm-12 col-form-label" style="text-align: left;">Nas últimas duas semanas você teve alguma dessas doenças?</label>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="infeccao_bacteriana">
                                                <label class="form-check-label" for="inlineCheckbox8">Tratamento de infecções bacterianas (uso de antibióticos)</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="rubeola">
                                                <label class="form-check-label" for="inlineCheckbox9">Rubéola</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="erisipela">
                                                <label class="form-check-label" for="inlineCheckbox10">Erisipela</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sintomas2" class="col-sm-12 col-form-label" style="text-align: left;">Nas últimas três semanas você teve alguma dessas doenças?</label>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="caxumba">
                                                <label class="form-check-label" for="inlineCheckbox6">Caxumba</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="catapora">
                                                <label class="form-check-label" for="inlineCheckbox7">Varicela (catapora)</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sintomas3" class="col-sm-12 col-form-label" style="text-align: left;">Nas últimas quatro semanas você passou por algum desses procedimentos ou teve alguma dessas doenças?</label>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox16" value="vacina_virus_bacteria">
                                                <label class="form-check-label" for="inlineCheckbox16">Se recebeu vacina de vírus ou bactérias vivos e atenuados. Ex.: poliomielite oral (sabin), febre tifóide oral, caxumba, febre amarela, sarampo, bcg, rubéola, catapora, varíola etc.</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox17" value="soro_antitetanico">
                                                <label class="form-check-label" for="inlineCheckbox17">Se recebeu soro antitetânico</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox18" value="dengue">
                                                <label class="form-check-label" for="inlineCheckbox18">Dengue</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox19" value="cirurgia_odontologica">
                                                <label class="form-check-label" for="inlineCheckbox19">Cirurgia odontológica com anestesia geral</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox20" value="febre_amarela">
                                                <label class="form-check-label" for="inlineCheckbox20">Após o retorno, quem esteve em região onde há surto de Febre Amarela</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="aborto" class="col-sm-12 col-form-label" style="text-align: left;">Nas últimas 12 semanas (somente para mulheres) passou por algum desses procedimentos?</label>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox21" value="aferese">
                                                <label class="form-check-label" for="inlineCheckbox21">Se houve doação dupla de hemácias por aférese</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox22" value="parto_aborto">
                                                <label class="form-check-label" for="inlineCheckbox22">Parto normal ou abortamento</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sintomas" class="col-sm-12 col-form-label" style="text-align: left;">Nos últimos três meses foi submetido a algum desses procedimentos?</label>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="apendicectomia">
                                                <label class="form-check-label" for="inlineCheckbox11">Apendicectomia</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="hemorroidectomia">
                                                <label class="form-check-label" for="inlineCheckbox12">Hemorroidectomia</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="hernioplastia">
                                                <label class="form-check-label" for="inlineCheckbox13">Hernioplastia</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox14" value="varizes">
                                                <label class="form-check-label" for="inlineCheckbox14">Ressecção de varizes</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox15" value="amigdalectomia">
                                                <label class="form-check-label" for="inlineCheckbox15">Amigdalectomia</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="procedimentos_um_ano" class="col-sm-12 col-form-label" style="text-align: left;">Nos últimos seis meses a 01 ano passou por algum desses procedimentos?</label>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox22" value="cirurgia_medio_grande_porte">
                                                <label class="form-check-label" for="inlineCheckbox22">Foi submetido a uma cirurgia de médio ou grande porte como por exemplo: colecistectomia, histerectomia, tireoidectomia, colectomia, esplenectomia pós trauma, nefrectomia etc</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox23" value="toxoplasmose">
                                                <label class="form-check-label" for="inlineCheckbox23">Após a cura de toxoplasmose comprovada laboratorialmente</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox24" value="endoscopia">
                                                <label class="form-check-label" for="inlineCheckbox24">Qualquer procedimento endoscópico (endoscopia digestiva alta, colonoscopia, rinoscopia etc): aguardar 6 meses</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox25" value="piercing">
                                                <label class="form-check-label" for="inlineCheckbox25">Se fez piercing (se piercing na cavidade oral ou genital, devido ao risco permanente de infecção, implica em inaptidão por 12 meses após a retirada)</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox25" value="febre_amarela">
                                                <label class="form-check-label" for="inlineCheckbox25">Se contraiu Febre Amarela; aguardar 6 meses após recuperação completa (clínica e laboratorial)</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox26" value="transfusao">
                                                <label class="form-check-label" for="inlineCheckbox26">Se recebeu uma transfusão de sangue, plasma, plaquetas ou hemoderivados</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox27" value="enxerto">
                                                <label class="form-check-label" for="inlineCheckbox27">Se recebeu enxerto de pele</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox28" value="contaminacao_sangue">
                                                <label class="form-check-label" for="inlineCheckbox28">Se sofreu acidente se contaminando com sangue de outra pessoa</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox29" value="acidente_agulha">
                                                <label class="form-check-label" for="inlineCheckbox29">Se teve acidente com agulha já utilizada por outra pessoa</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox30" value="hiv_positivo">
                                                <label class="form-check-label" for="inlineCheckbox30">Se teve contato sexual com alguma pessoa com aids ou com teste positivo para hiv</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox31" value="prostituta">
                                                <label class="form-check-label" for="inlineCheckbox31">Se teve contato sexual em troca de dinheiro ou de drogas ou seus respectivos parceiros sexuais</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox32" value="droga_endovenosa">
                                                <label class="form-check-label" for="inlineCheckbox32">Se teve contato sexual com usuário de droga endovenosa</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox33" value="sexo_transfusao">
                                                <label class="form-check-label" for="inlineCheckbox33">Se teve contato sexual com pessoa que tenha recebido transfusão de sangue nos últimos 12 meses</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox34" value="sexo_hepatite">
                                                <label class="form-check-label" for="inlineCheckbox34">Se teve relação sexual com pessoa com hepatite</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox35" value="tatuagem_maquiagem">
                                                <label class="form-check-label" for="inlineCheckbox35">Se fez tatuagem ou maquiagem definitiva</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox36" value="sifilis">
                                                <label class="form-check-label" for="inlineCheckbox36">Se teve sífilis ou gonorréia</label>
                                            </div>
                                            <div class="form-check col-sm-12">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox37" value="detido_24">
                                                <label class="form-check-label" for="inlineCheckbox37">Se foi detido por mais de 24 horas</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tuberculose" class="col-sm-12 col-form-label" style="text-align: left;">Nos últimos cinco anos passou por algum desses procedimentos?</label>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox38" value="tuberculose_pulmonar">
                                                <label class="form-check-label" for="inlineCheckbox38">Tuberculose pulmonar</label>
                                            </div>
                                        </div>

                                        <div class="row text-center">
                                            <div class="col-lg-6 col-sm-12 text-center mt-4 col-">
                                                <button id="enviar" type="submit" class="btn btn-info" style="font-weight: bold; font-size: 16px;">Enviar</button>
                                            </div>
                                            <div class="col-lg-6 col-sm-10 mt-4 col-">
                                                <button type="button" class="btn btn-secondary" style="font-weight: bold; font-size: 16px;">Cancelar</button>		
                                            </div>
                                        </div>
                                    </div>
                                </form>			
                            </div>
                        </div>
                    </div>
                </div>		
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
@stop
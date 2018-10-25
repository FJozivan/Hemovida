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
                                        </div>

                                        <div class="row">
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
                                            <label for="sintomas" class="col-sm-12 col-form-label" style="text-align: left;">Nos últimos 7 dias você sentiu algum desses sintomas?</label>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="diarreia">
                                                <label class="form-check-label" for="inlineCheckbox1">Diarréia</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="resfriado">
                                                <label class="form-check-label" for="inlineCheckbox2">Gripe ou resfriado</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="conjuntivite">
                                                <label class="form-check-label" for="inlineCheckbox3">Conjuntivite</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="extracao_dentaria">
                                                <label class="form-check-label" for="inlineCheckbox4">Extração dentária</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="canal">
                                                <label class="form-check-label" for="inlineCheckbox5">Tratamento de canal</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sintomas" class="col-sm-12 col-form-label" style="text-align: left;">Nas últimas duas semanas você sentiu alguma dessas doenças?</label>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="infeccao_bacteriana">
                                                <label class="form-check-label" for="inlineCheckbox8">Após o término do tratamento de infecções bacterianas (uso de antibióticos)</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="rubeola">
                                                <label class="form-check-label" for="inlineCheckbox9">Após a cura de rubéola</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="erisipela">
                                                <label class="form-check-label" for="inlineCheckbox10">Após a cura de erisipela</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sintomas2" class="col-sm-12 col-form-label" style="text-align: left;">Nas últimas três semanas você sentiu alguma dessas doenças?</label>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="caxumba">
                                                <label class="form-check-label" for="inlineCheckbox6">Após a cura de caxumba</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="catapora">
                                                <label class="form-check-label" for="inlineCheckbox7">Após a cura de varicela (catapora)</label>
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

                                    </div>

                                    <div class="row text-center">
                                        <div class="col-lg-6 col-sm-12 text-center mt-4 col-">
                                            <button id="enviar" type="submit" class="btn btn-info" style="font-weight: bold; font-size: 16px;">Enviar</button>
                                        </div>
                                        <div class="col-lg-6 col-sm-10 mt-4 col-">
                                            <button type="button" class="btn btn-secondary" style="font-weight: bold; font-size: 16px;">Cancelar</button>		
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
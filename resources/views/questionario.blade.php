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
                                        </div>

                                        <div class="row">
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
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="dsts" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Já contraiu doenças sexualmente transmissíveis?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="dstssim" name="dsts" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="dstssim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="dstsnao" name="dsts" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="dstsnao">Não</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-6">
                                                <label for="tatuagem" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Fez  tatuagem ou maquiagem definitiva?</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="tatuagemsim" name="tatuagem" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="tatuagemsim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="tatuagemnao" name="tatuagem" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="tatuagemnao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="row col-md-6">
                                                <label for="cirurgias" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Foi submetido a uma cirurgia de médio ou grande porte como por exemplo: colecistectomia, histerectomia, tireoidectomia, colectomia, esplenectomia pós trauma, nefrectomia etc.</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="cirurgiassim" name="cirurgias" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="cirurgiassim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="cirurgiasnao" name="cirurgias" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="cirurgiasnao">Não</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-6">
                                                <label for="febreamarela" class="col-lg-7 col-sm-7 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Já esteve em região onde há surto de Febre Amarela</label>
                                                <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="febreamarelasim" name="febreamarela" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="febreamarelasim">Sim</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="febreamarelanao" name="febreamarela" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="febreamarelanao">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-12" style="margin-top: 20px;">
                                            <p style="margin-left: -25px;">MÚLTIPLA ESCOLHA</p>
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
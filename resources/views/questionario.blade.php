@extends('layouts.app')
{{-- @section('titulo')
{{ $titulo }}
@stop --}}
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
                                Quetionário Hemoce
                            </h5>
                            <hr style="background-color: red; margin-top: 5px">
                        </center>
                    </div>
                </div>

                <div class="row">
                    <div class="container">
                        <div class="col-lg-12 mb-3">
                            
                            @if (count($errors) != 0)
                            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                Por favor, é importante que todas as perguntas sejam respondidas!
                                {{-- <ul>
                                    @foreach ($errors->all() as $erro)
                                    <div style="border-radius: 10px">
                                        <li>{{ $erro }}</li>
                                        @endforeach
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </ul> --}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                @endif
                                <form method="POST" action="/enviar_questionario" class="mt-4">
                                    @csrf
                                    <div class="container font">
                                        {{-- <div class="col-lg-12 col-sm-12">
                                            <p style="margin-justify: -25px;">ESCOLHA UMA DAS OPÇÕES A SEGUIR</p>
                                        </div> --}}

                                        <div class="row">
                                            @foreach ($questionario as $q)
                                            <div class="row col-md-6 col-lg-6 col-sm-12">
                                                    <label for="{{$q->id}}" class="col-lg-7 col-sm-12 col-form-label" style="text-align: justify;"><span class="obrigatorio">*</span> {{$q->corpo_pergunta}}</label>
                                                    <div class="col-lg-5 col-sm-5" style="margin-top: 7px">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="{{$q->id}}_sim" name="{{$q->id}}" class="custom-control-input" value="true">
                                                            <label class="custom-control-label" for="{{$q->id}}_sim">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="{{$q->id}}_nao" name="{{$q->id}}" class="custom-control-input" value="false">
                                                            <label class="custom-control-label" for="{{$q->id}}_nao">Não</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        
                                        <button class="btn btn-success mt-4 ml-2">Enviar Questionario</button>
                                        {{-- <div class="col-lg-12 col-sm-12" style="margin-top: 20px;">
                                            <p style="margin-justify: -25px;">MÚLTIPLA ESCOLHA</p>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sintomas3" class="col-sm-12 col-form-label" style="text-align: justify;">Nas últimas quatro semanas você passou por algum desses procedimentos ou teve alguma dessas doenças?</label>
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
                                            <label for="sintomas" class="col-sm-12 col-form-label" style="text-align: justify;">Nos últimos três meses foi submetido a algum desses procedimentos?</label>
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
                                        </div> --}}
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
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
				<!-- <div class="container"> -->
					<div class="row">
						<div class="col-xl-12">
							<center>
								<h5 style="margin-top: 20px; font-family: 'Raleway', sans-serif; color: red;">
									CADASTRO DE FUNCIONÁRIOS
								</h5>
								<hr style="background-color: red; margin-top: 5px">
							</center>
						</div>
						<!-- <div class="col-xl-12"><hr style="border: 2px solid red; margin-top: -8px;"></div> -->
					</div>
					
					<div class="row">
						<div class="container">
							<div class="col-lg-12 mb-3">
								@if ($errors->has('sexo'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('sexo') }}</strong>
									</span>
								@endif
								{{-- @if (isset($errors))
								@if (count($errors) != 0)
								<div class="alert alert-warning alert-dismissible fade show" role="alert">
									<p>Campo(s) obrigatorio(s):</p>
									<ul>
										@foreach ($errors->all() as $erro)
										<strong> <li> {{ $erro }} </li> </strong>
										@endforeach
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</ul>
								</div>
								@endif
								@endif --}}
								
								<form method="post" action="/cadastrar_funcionario">
									@csrf

									<div class="container font">
										<div class="col-lg-12 col-sm-12">
											<p style="margin-left: -25px;">IDENTIFICAÇÃO</p>
										</div>

										<div class="form-group row">
											<label for="numero_de_inscricao" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> N° inscrição</label>
											<div class="col-lg-10 col-sm-10">
												<input type="text" class="form-control {{ $errors->has('numero_de_inscricao') ? ' is-invalid' : '' }}" id="numero_de_inscricao" name="numero_de_inscricao" value="{{ old('numero_de_inscricao') }}">


												@if ($errors->has('numero_de_inscricao'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('numero_de_inscricao') }}</strong>
												</span>
												@endif
											</div>
										</div>

										<div class="form-group row">
											<label for="nome" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Nome:</label>
											<div class="col-lg-10 col-sm-10">
												<input type="text" class="form-control {{ $errors->has('nome') ? ' is-invalid' : '' }}" id="nome" name="nome" value="{{ old('nome') }}">

												@if ($errors->has('nome'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('nome') }}</strong>
												</span>
												@endif
											</div>
										</div>

										<div class="form-group row">
											<label for="sobrenome" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Sobrenome:</label>
											<div class="col-lg-10 col-sm-10">
												<input type="text" class="form-control {{ $errors->has('sobrenome') ? ' is-invalid' : '' }}" id="sobrenome" name="sobrenome" value="{{ old('sobrenome') }}">

												@if ($errors->has('sobrenome'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('sobrenome') }}</strong>
												</span>
												@endif
											</div>
										</div>

										<div class="form-group row">
											<label for="email" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> E-mail</label>
											<div class="col-lg-10 col-sm-10">
												<input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}">

												@if ($errors->has('email'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
												@endif
											</div>
										</div>

										<div class="row">
											<label for="sexo" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Sexo:</label>
											<div class="col-lg-9 col-sm-9" style="margin-top: 7px">
												<div class="custom-control custom-radio custom-control-inline">
													<input type="radio" id="masculino" name="sexo" class="custom-control-input" value="m">
													<label class="custom-control-label" for="masculino">Masculino</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline">
													<input type="radio" id="feminino" name="sexo" class="custom-control-input" value="f">
													<label class="custom-control-label" for="feminino">Feminino</label>
												</div>


											</div>
											
										</div>

										<div class="form-group row">
											<label for="senha" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Senha:</label>
											<div class="col-lg-10 col-sm-10">
												<input type="password" class="form-control {{ $errors->has('senha') ? ' is-invalid' : '' }}" id="senha" name="senha">

												@if ($errors->has('senha'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('senha') }}</strong>
												</span>
												@endif
											</div>
										</div>

										<div class="form-group row">
											<label for="confirma_senha" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Confirmar senha:</label>
											<div class="col-lg-10 col-sm-10">
												<input type="password" class="form-control" id="confirma_senha" name="confirma_senha">
												<div class="invalid-feedback">
													Confirmação de senha não confere
												</div>
												<p class="mt-2">Os campos com <span class="obrigatorio " style="font-size: 20px;">*</span> são de preenchimento obrigatório</p>
											</div>

										</div>

										<div class="row text-center">
											<div class="col-lg-6 col-sm-12 text-center mt-2 col-">
												<button type="submit" id="cadastrar" class="btn btn-info" style="font-weight: bold; font-size: 16px;">Cadastrar</button>
											</div>

											<div class="col-lg-6 col-sm-10 mt-2 col-">
												<a href="ver_funcionarios" class="btn btn-secondary ml-2">Cancelar</a>	
											</div>
										</div>
									</div>
								</form>			
							</div>
						</div>
					</div>
					<!-- </div> -->
				</div>		
			</div>
		</div>

	</div>
	<script>
		$("#confirma_senha").on("change paste keyup", function() {
			confirmaSenha();
		});
		$("#senha").on("change paste keyup", function() {
			confirmaSenha();
		});
		function confirmaSenha() {
			if ($("#confirma_senha").val() !== $("#senha").val()){
				$("#confirma_senha").addClass("is-invalid");
				$("#cadastrar").prop('disabled', true);
			} else {
				$("#confirma_senha").removeClass("is-invalid");
				$("#cadastrar").prop('disabled', false);
			}
		}
	</script>
	@stop
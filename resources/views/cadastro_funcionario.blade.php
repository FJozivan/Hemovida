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
								<form method="" action="">
									<div class="container font">
										<div class="col-lg-12 col-sm-12">
											<p style="margin-left: -25px;">IDENTIFICAÇÃO</p>
										</div>

										<div class="form-group row">
											<label for="numero_inscricao" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> N° inscrição</label>
											<div class="col-lg-10 col-sm-10">
												<input type="text" class="form-control" id="numero_inscricao" name="numero_inscricao">
											</div>
										</div>

										<div class="form-group row">
											<label for="nome" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Nome:</label>
											<div class="col-lg-10 col-sm-10">
												<input type="text" class="form-control" id="nome" name="nome">
											</div>
										</div>

										<div class="form-group row">
											<label for="sobrenome" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;">Sobrenome:</label>
											<div class="col-lg-10 col-sm-10">
												<input type="text" class="form-control" id="sobrenome" name="sobrenome">
											</div>
										</div>

										<div class="form-group row">
											<label for="email" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> E-mail</label>
											<div class="col-lg-10 col-sm-10">
												<input type="text" class="form-control" id="email" name="email">
											</div>
										</div>

										<div class="row">
											<label for="sexo" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;">Sexo:</label>
											<div class="col-lg-9 col-sm-9" style="margin-top: 7px">
												<div class="custom-control custom-radio custom-control-inline">
													<input type="radio" id="masculino" name="sexo" class="custom-control-input">
													<label class="custom-control-label" for="masculino">Masculino</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline">
													<input type="radio" id="feminino" name="sexo" class="custom-control-input">
													<label class="custom-control-label" for="feminino">Feminino</label>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label for="senha" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Senha:</label>
											<div class="col-lg-10 col-sm-10">
												<input type="password" class="form-control" id="senha" name="senha">
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
												<button type="submit" id="cadastrar" class="btn btn-danger" style="font-weight: bold; font-size: 16px;">Cadastrar</button>
											</div>
											<div class="col-lg-6 col-sm-10 mt-2 col-">
												<button type="submit" class="btn btn-warning" style="font-weight: bold; font-size: 16px;">Cancelar</button>		
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
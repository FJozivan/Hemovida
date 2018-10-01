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
				<!-- <div class="container"> -->
				<div class="row">
					<div class="col-xl-12">
						<center>
							<h5 style="margin-top: 20px; font-family: 'Raleway', sans-serif; color: red;">
								MEU CADASTRO
							</h5>
							<hr style="background-color: red; margin-top: 5px">
						</center>
					</div>
					<!-- <div class="col-xl-12"><hr style="border: 2px solid red; margin-top: -8px;"></div> -->
				</div>
				
				<div class="row">
					<div class="container">
						<div class="col-lg-12 mb-3">
							<form method="POST" action="cadastrar_doador">
								{{ csrf_field() }}
								<div class="container font">
									<div class="col-lg-12 col-sm-12">
										<p style="margin-left: -25px;">IDENTIFICAÇÃO</p>
									</div>

									<div class="form-group row">
										<label for="nome" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Nome:</label>
										<div class="col-lg-10 col-sm-10">
											<input type="text" class="form-control" id="nome" name="nome">
										</div>
									</div>

									<div class="form-group row">
										<label for="sobrenome" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Sobrenome:</label>
										<div class="col-lg-10 col-sm-10">
											<input type="text" class="form-control" id="sobrenome" name="sobrenome">
										</div>
									</div>

									<div class="form-group row">
										<label for="cpf" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> CPF:</label>
										<div class="col-lg-10 col-sm-10">
											<input type="text" class="form-control" id="cpf" name="cpf">
										</div>
									</div>

									<div class="form-group row">
										<label for="data_nascimento" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Data de Nascimento:</label>
										<div class="col-lg-10 col-sm-10">
											<input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
										</div>
									</div>

									<div class="row">
										<label for="sexo" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Sexo:</label>
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
										<label for="email" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> E-mail:</label>
										<div class="col-lg-10 col-sm-10">
											<input type="email" class="form-control" id="email" name="email">
										</div>
									</div>

									<div class="form-group row">
										<label for="profissao" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;">Profissão:</label>
										<div class="col-lg-10 col-sm-10">
											<input type="text" class="form-control" id="profissao" name="profissao">
										</div>
									</div>

									<div class="form-group row">
										<label for="senha" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Senha:</label>
										<div class="col-lg-10 col-sm-10">
											<input type="text" class="form-control" id="senha" name="senha">
										</div>
									</div>

									<div class="form-group row">
										<label for="confirma_senha" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Confirmar senha:</label>
										<div class="col-lg-10 col-sm-10">
											<input type="text" class="form-control" id="senha" name="senha2">
										</div>
									</div>

									<br>

									<div class="col-lg-12 col-sm-12">
										<h6 style="margin-left: -25px">ENDEREÇO</h6><br>
									</div>

									<div class="form-group row">
										<label for="cep" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> CEP:</label>
										<div class="col-lg-10 col-sm-10">
											<input type="text" class="form-control" id="cep" name="cep">
										</div>
									</div>

									<div class="row mb-2">
										<label for="rua" class="col-lg-2 col-sm-12 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Rua:</label>
										<!-- <div class="col-sm-7 form-group row"> -->
											<div class="col-lg-6 col-sm-12">
												<input type="text" class="form-control" id="rua" name="rua">
											</div>
										<!-- </div> -->
										<div class="row">
											<label for="numero" class="col-lg-3 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span>Nº:</label>
											<div class="col-lg-4 col-sm-2">
												<input type="text" class="form-control" id="numero" name="numero">
											</div>
										</div>
									</div>

									<div class="row">
										<label for="bairro" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Bairro:</label>
										<div class="col-sm-4 form-group row">
											<div class="col-lg-10 col-sm-10">
												<input type="text" class="form-control" id="bairro" name="bairro">
											</div>
										</div>
										<div class="col-sm-6 form-group row">
											<label for="cidade" class="col-lg-3 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Cidade:</label>
											<div class="col-lg-9 col-sm-10">
												<input type="text" class="form-control" id="cidade" name="cidade">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label for="referencia" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;">Referência:</label>
										<div class="col-lg-10 col-sm-10">
											<input type="text" class="form-control" id="referencia" name="referencia">
										</div>
									</div>

									<div class="row">
										<label for="tipo_sanguineo" class="col-lg-2 col-sm-2 col-form-label" style="text-align: left;"><span class="obrigatorio">*</span> Tipo sanguíneo:</label>
										<div class="col-lg-10 col-sm-10">
											<select class=" custom-select" name="tipo_sanguineo">
												<option selected value="I">Não sei qual é meu sangue</option>
												<option value="A+">A+</option>
												<option value="A-">A-</option>
												<option value="B+">B+</option>
												<option value="B-">B-</option>
												<option value="AB+">AB+</option>
												<option value="AB-">AB-</option>
												<option value="O+">O+</option>
												<option value="O-">O-</option>
											</select>
											<p class="mt-2">Os campos com <span class="obrigatorio " style="font-size: 20px;">*</span> são de preenchimento obrigatório</p>
										</div>
									</div>
									<div class="row text-center">
										<div class="col-lg-6 col-sm-12 text-center mt-4 col-">
											<button type="submit" class="btn btn-danger" style="font-weight: bold; font-size: 16px;">Cadastrar</button>
										</div>
										<div class="col-lg-6 col-sm-10 mt-4 col-">
											<button type="submit" class="btn btn-warning" style="font-weight: bold; font-size: 16px;">Cancelar</button>		
										</div>
									</div>
									<a href="doadores"> Ver doadores cadastrados</a>

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
@stop
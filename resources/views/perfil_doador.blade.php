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
			@if (session('success')!== null)
				<div class="row text-center">
					<div class="col-lg-3 col-sm-1"></div>
					<div class="col-lg-6 col-sm-10">
						<div class="alert alert-success alert-dismissible fade show" role="alert"">
								{{ session('success') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
								</button>
						</div>
					</div>
				</div>
			@endif
			<div class="container" style="background-color: white; border-radius: 10px; box-shadow: 0px 0px 0px 0.4px;">
				<!-- <div class="container"> -->
					{{-- {{dd(session()->get('user'))}} --}}
					<div class="row">
						<div class="container">
							<div class="col-lg-12 mb-3">
								<div class="row text-right">
									<div class="col-lg-12 col-sm-12">
									<a href="editar_doador/{{session()->get('user')[0]['id']}}" class="btn btn-warning btn-sm mt-2">Editar Informações</a>
										<span> </span>
										<a href="/apagar_doador/{{session()->get('user')[0]['id']}}" class="btn btn-danger btn-sm mt-2">Excluir Conta</a>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-6 col-sm-12 mt-2 col- text-center">
										<div class="col-lg-12 text-center">
												<img class=" mb-3" src="./img/icone.jpg" class="img-fluid" style="margin:auto; width: 100px; border-radius: 50px; margin-top: 0px; box-shadow: 0px 0px 1px" />
										</div>
										<div class="col-lg-12"><strong>Nome:</strong> {{session()->get('user')[0]['nome']}}</div>
										<div class="col-lg-12"><strong>Data de Nascimento: </strong> {{session()->get('user')[0]['data_nascimento']}}</div>
										<div class="col-lg-12"><strong>Sexo</strong> {{session()->get('user')[0]['sexo']}}</div>
										<div class="col-lg-12"><strong>E-mail</strong> {{session()->get('user')[0]['email']}}</div>
										<div class="col-lg-12"><strong>Tipo Sanguineo</strong> {{session()->get('user')[0]['tipo_sanguineo']}}</div>
										
									</div>
								</div>		
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
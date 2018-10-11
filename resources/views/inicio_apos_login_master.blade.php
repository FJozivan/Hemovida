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
						<div class="container">
							<div class="col-lg-12 mb-3">
								<div class="row text-center">	
									<div class="col-lg-6 col-sm-10 mt-2 col-">
										<a href="cadastro_funcionario" class="btn btn-info btn-lg ml-2">Cadastrar Funcionarios</a>	
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
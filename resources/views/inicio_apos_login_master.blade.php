@extends('layouts.app')
{{-- @section('titulo')
{{ $titulo }}
@stop --}}
@section('cabecalho')
@extends('layouts.cabecalho')
@stop
@section('corpo')

<div class="container-fluid mb-5" style="background-color: #182E47; margin-top: 60px;">
	<div class="row">
		
		<div class="container text-center" style="color:white;">
			<h3 style="font-family: 'Raleway', sans-serif;">Doadores</h3>
					{{-- <div class="row">
						<div class="container">
							<div class="col-lg-12 mb-3">
								<div class="row text-center">	
									<div class="col-lg-6 col-sm-10 mt-2 col-"> --}}
										<div class="col-lg-4 col-sm-4 col-"></div>
										<div class="col-lg-4 col-sm-4 col-">
											<div class="input-group mb-2">
											<div class="input-group-prepend mt-2 mr-2">
												<i class="fas fa-search"></i>
											</div>
											<input class="form-control mb-2" style="background: none; border-radius: 20px" id="myInput" id="" type="text" placeholder="Pesquisar...">
										</div>
										</div>

										<div class="col-lg-4 col-sm-4 col-">
											<table class="table table-borderless text-center" style="color:white">
												<thead>
													<tr>
														<th></th>
														<th>Nome</th>
														<th>Tipo Sanguineo</th>
													</tr>
												</thead>
												<tbody id="myTable">
													<tr>
														<td><input type="checkbox" name=""></td>
														<td>
															<a href="#">
																<i class="fas fa-plus-circle"></i>
															</a> 
															John
														</td>
														<td>A+</td>
													</tr>
													<tr>
														<td><input type="checkbox" name=""></td>
														<td>Mary</td>
														<td>O-</td>
													</tr>
													<tr>
														<td><input type="checkbox" name=""></td>
														<td>July</td>
														<td>O+</td>	
													</tr>
												</tbody>
											</table>
										{{-- </div>
									</div>		
								</div>
							</div>
						</div> --}}
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
		<script>
			$(document).ready(function(){
				$("#myInput").on("keyup", function() {
					var value = $(this).val().toLowerCase();
					$("#myTable tr").filter(function() {
						$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
					});
				});
			});
		</script>
		@stop
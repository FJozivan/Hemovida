@extends('layouts.app')
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
					<div class="row">
						<div class="col-xl-12">
							<center>
								<h5 style="margin-top: 20px; font-family: 'Raleway', sans-serif; color: red;">
									Doadores
								</h5>
								<hr style="background-color: red; margin-top: 5px">
							</center>
						</div>
						<!-- <div class="col-xl-12"><hr style="border: 2px solid red; margin-top: -8px;"></div> -->
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-4"></div>
							<div class="col-lg-4">								
								<input class="form-control mb-2" style="background: none; border-radius: 20px" id="myInput" id="" type="text" placeholder="Pesquisar...">
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="container">
							<div class="col-lg-12 mb-3">
								<form action="enviar_mail" class="mt-3 mb-3 ml-5 mr-5" method="post">
									@csrf
									<div class="table-responsive">

										<table class="table">
											<thead>
												<tr>
													<th>Selecione</th>
													<th>Nome</th>
													<th>Tipo San</th>
													<th>Email</th>
													<th>Ações</th>
												</tr>
											</thead>
											<tbody id="myTable">
												<?php $cont = 1 ?>
												@foreach ($dados as $dado)
												<tr>
													<td>
														<div class="checkbox">
															<input type="checkbox" value={{$dado->email}} id="checkbox-1" name={{$cont}}>

														</div>
													</td>
													<td>{{ $dado->nome }}</td>
													<td>{{$dado->tipo_sanguineo}}</td>
													<td>{{ $dado->email }}</td>
													<td>
														{{-- Visualizar Doadores--}}
														<a href="/editar_doador/{{ $dado->id }}">Visualizar</a>
														<span> / </span>

														{{-- deletar Doadores--}}
														<a href="/apagar_doador/{{ $dado->id }}" class="btn btn-danger btn-sm" id="deletar">Deletar</a>
													</td>
												</tr>
												<?php $cont++?>
												@endforeach	

											</tbody>										
										</table>

									</div>
									<button type="submit" class="btn btn-warning" style="font-weight: bold; font-size: 16px;" id="email">Enviar Email</button>
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
		$( "#searchButton" ).click(function() {
			if ($( "#search" ).val() !== "") {
				var location = window.location.href;
				location = location.split("?")[0];
				window.location.replace(location + "?name=" + $( "#search" ).val());
			} else {
				var location = window.location.href;
				location = location.split("?")[0];
				window.location.replace(location);
			}
		});
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

			// 'var buttonDeletar = document.getElementById('deletar');
						// buttonDeletar.onclick = function(){
						// 	confirm("deseja realmente apagar o doador?");
						// };'
				var buttonEmail = document.getElementById('email');
				function habilidaDisable(){
					buttonEmail.disabled = true;
				}

				function desabilidaDisable(){
					buttonEmail.disabled = false;
				}
		</script>
	@stop
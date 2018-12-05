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
							<div class="col-lg-12 col-sm-12 text-center p-2" style="font-family: 'Raleway', sans-serif;"><h5>Perfil doador</h5></div>
							<div class="col-lg-12 col-sm-12 mb-3">
								<div class="row text-right">
									<div class="col-lg-12 col-sm-12">
									<a href="{{session()->get('user')[0]['quetionarioRespondido'] === 0 ? '/questionario' : '#'}}" class="btn btn-secondary btn-sm mt-2" aria-disabled="true">Questionarios 
												
										@if (session()->get('user')[0]['quetionarioRespondido'] === 0)
													<span class="badge badge-warning">1</span>	
												@else
												<span class="badge badge-warning">0</span>	
													@endif
												

											</a>
										<a href="/editar_doador/{{session()->get('user')[0]['id']}}" class="btn btn-info btn-sm mt-2">Editar Informações</a>
										{{-- <a href="/apagar_doador/{{session()->get('user')[0]['id']}}" class="btn btn-danger btn-sm mt-2">Excluir Conta</a> --}}
										<a href="#" data-toggle="modal" data-target="#deletarDoador{{ session()->get('user')[0]['id'] }}" class="btn btn-danger btn-sm mt-2" id="deletar">Excluir Conta</a>
										<div class="modal fade" id="deletarDoador{{ session()->get('user')[0]['id'] }}" tabindex="-1" role="dialog" aria-labelledby="deletarDoadorLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="deletarDoadorLabel">Excluir Conta?</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													Você tem certeza que deseja excluir sua conta?
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
													<a href="/apagar_doador/{{ session()->get('user')[0]['id'] }}" class="btn btn-danger btn-sm">Excluir</a>
												</div>
												</div>
											</div>
											</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-6 col-sm-12 mt-2 col- text-center" >
										<div class="row text-center">
											@if(session()->get('user')[0]['image']!=='none')
												<img class=" mb-3" src="{{url('storage/doadores/'.session()->get('user')[0]['image'])}}" class="img-fluid" style="margin:auto; width: 100px; border-radius: 100px; margin-top: 0px; box-shadow: 0px 0px 1px;width:125px;height: 125px" />
											@else
												<img class="mb-3" src="./img/icone.jpg" class="img-fluid" style="margin:auto; width: 100px;height:100px;border-radius: 50px; margin-top: 0px; box-shadow: 0px 0px 1px" />
											@endif
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-0">
												
											</div>
											<table>
											<tbody style="font-family: 'Raleway', sans-serif;">
												<tr>
													<th>Nome:</th>
													<td>&nbsp {{session()->get('user')[0]['nome']}}</td>
												</tr>
												<tr>
													<th>Idade:</th>
													<td>&nbsp {{ date("Y") - date("Y", strtotime(session()->get('user')[0]['data_nascimento']))}}</td>
												</tr>
												<tr>
													<th>Sexo:</th>
													<td>
														@if (session()->get('user')[0]['sexo'] === 'm')
															<span>&nbsp Masculino</span>
														@else
															<span>&nbsp Feminino</span>
														@endif
													</td>
												</tr>
												<tr>
													<th>E-mail:</th>
													<td>&nbsp {{session()->get('user')[0]['email']}}</td>
												</tr>
												<tr>
													<th>Tipo sanguineo:</th>
													<td> <h4>&nbsp {{session()->get('user')[0]['tipo_sanguineo']}}</h4></td>
												</tr>
											</tbody>
										</table>	
										</div>
										
										{{-- <div class="col-lg-12 col-sm-12 text-justify" style="font-family: 'Raleway', sans-serif;"><strong>Nome:</strong> {{session()->get('user')[0]['nome']}}</div>
										<div class="col-lg-12 col-sm-12 text-justify" style="font-family: 'Raleway', sans-serif;"><strong>Data de Nascimento: </strong> {{date("d-m-Y", strtotime(session()->get('user')[0]['data_nascimento']))}}</div>
										<div class="col-lg-12 col-sm-12 text-justify" style="font-family: 'Raleway', sans-serif;"><strong>Sexo:</strong> {{session()->get('user')[0]['sexo']}}</div>
										<div class="col-lg-12 col-sm-12 text-justify" style="font-family: 'Raleway', sans-serif;"><strong>E-mail:</strong> {{session()->get('user')[0]['email']}}</div>
										<div class="col-lg-12 col-sm-12 text-justify" style="font-family: 'Raleway', sans-serif;"><strong>Tipo Sanguineo:</strong> {{session()->get('user')[0]['tipo_sanguineo']}}</div>
										 --}}
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
@extends('layouts.app')
@section('cabecalho')
@extends('layouts.cabecalho')
@stop
@section('corpo')
@if (isset($success))
{{-- <script type="text/javascript">
	alert({{ $success }});
</script> --}}
{{$success}}
@endif
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
				<div class="container">
					
					<div class="row">
						<div class="col-xl-12">
							<center>
								<h5 style="margin-top: 20px; font-family: 'Raleway', sans-serif; color: red;">
									Funcionários
								</h5>
								<hr style="background-color: red; margin-top: 5px">
							</center>
						</div>
					</div>
					@if($dados !== null)
						<div class="row">
							<div class="container">
								<div class="col-lg-12 mb-3">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Nome</th>
													<th>Email</th>
													<th>Ações</th>
												</tr>
											</thead>
											<tbody>
												
													@foreach ($dados as $dado)
													<tr>
														<td>{{ $dado->nome }}</td>
														<td>{{ $dado->email }}</td>
														<td>
															{{-- Editar funcionario --}}
															<a href="/editar_funcionario/{{ $dado->id }}">Visualizar</a>
															<span> / </span>
															{{-- Apagar funcionario --}}
															<a href="#" data-toggle="modal" data-target="#deletarFuncionario{{ $dado->id }}" class="btn btn-danger btn-sm" >Deletar</a>
														</td>
													</tr>

													<!-- Modal -->
													<div class="modal fade" id="deletarFuncionario{{ $dado->id }}" tabindex="-1" role="dialog" aria-labelledby="deletarFuncionarioLabel" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="deletarFuncionarioLabel">Deletar funcionário</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															Você tem certeza que deseja deletar o funcionário {{ $dado->nome }}?
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
															<a href="/apagar_funcionario/{{ $dado->id }}" class="btn btn-danger btn-sm">Deletar</a>
														</div>
														</div>
													</div>
													</div>

													@endforeach	
											</tbody>
										</table>	
									</div>								
								</div>
							</div>
						</div>
					@else
						<div class="col-lg-12 mb-3 text-center"><i class='far fa-eye-slash' style='font-size:48px'></i></div>
					@endif
				</div>
			</div>		
		</div>
	</div>
</div>
	@stop
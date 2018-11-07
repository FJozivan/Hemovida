@extends('layouts.app')
@section('cabecalho')
@extends('layouts.cabecalho')
@stop
@section('corpo')
@if (isset($success))
<script type="text/javascript">
	alert({{ $success }});
</script>
@endif
<div class="container-fluid mb-5" style="background-color: #182E47; margin-top: 80px;">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-">
			<div class="container" style="background-color: white; border-radius: 10px; box-shadow: 0px 0px 0px 0.4px;">
				<!-- <div class="container"> -->
					<div class="row">
						<div class="col-xl-12">
							<center>
								<h5 style="margin-top: 20px; font-family: 'Raleway', sans-serif; color: red;">
									{{ $nome }} CADASTRADOS
								</h5>
								<hr style="background-color: red; margin-top: 5px">
							</center>
						</div>
						<!-- <div class="col-xl-12"><hr style="border: 2px solid red; margin-top: -8px;"></div> -->
					</div>

					<div class="row">
						<div class="container">
							<div class="col-lg-12 mb-3">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												{{-- <th>Selecionar</th> --}}
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
														<a href="/apagar_funcionario/{{ $dado->id }}">Deletar</a>
													</td>
												</tr>

												@endforeach	
										</tbody>
									</table>	
								</div>								
							</div>
						</div>
					</div>
					<!-- </div> -->
				</div>		
			</div>
		</div>
	</div>
	@stop
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
								<form action="enviar_mail" class="mt-3 mb-3 ml-5 mr-5" method="post">
									@csrf
									<div class="table-responsive">

										<table class="table">
											<thead>
												<tr>
													<th>Selecione</th>
													<th>Nome</th>
													<th>Email</th>
													<th>Ações</th>
												</tr>
											</thead>
											<tbody>
												<?php $cont = 1 ?>
												@foreach ($dados as $dado)
												<tr>
													<td>
														<div class="checkbox">
															<input type="checkbox" value={{$dado->email}} id="checkbox-1" name={{$cont}}>

														</div>
													</td>
													<td>{{ $dado->nome }}</td>
													<td>{{ $dado->email }}</td>
													<td><a href="/editar_doador/{{ $dado->id_doador }}">Editar</a></td>
												</tr>
												<?php $cont++?>
												@endforeach	

											</tbody>										
										</table>

									</div>
									<button type="submit" class="btn btn-warning" style="font-weight: bold; font-size: 16px;">Enviar Email</button>
								</form>	

								{{-- @if ($nome == "DOADORES")
								<button type="submit" class="btn btn-warning disabled" style="font-weight: bold; font-size: 16px;">Enviar Email</button>
								@endif --}}
								
							</div>
						</div>
					</div>
					<!-- </div> -->
				</div>		
			</div>
		</div>
	</div>
	@stop
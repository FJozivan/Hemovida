@extends('layouts.app')
@section('titulo')
{{ $titulo }}
@stop
@section('corpo')
<div class="container" style="margin-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 text-center">
				<img class="mt-1 mb-5" src="./img/hemovida.png" class="img-fluid" style="margin:auto; width: 300px;" />
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-3"></div>
			<div class="col-lg-6 col-sm-3" style="background-color: white; border-radius: 10px; box-shadow: 0px 0px 1px; margin-top: 10px">
				<form action="testeCheck" class="mt-3 mb-3 ml-5 mr-5" method="post">
					{{ csrf_field() }}

					<div class="checkbox">
						<input type="checkbox" value="1" id="checkbox-1" name="1">
						<label for="checkbox-1">1</label>
					</div>
					<div class="checkbox">
						<input type="checkbox" value="2" id="checkbox-2" name="2">
						<label for="checkbox-2">2</label>
					</div>
					<div class="checkbox">
						<input type="checkbox" value="3" id="checkbox-2" name="3">
						<label for="checkbox-2">3</label>
					</div>
					<div class="checkbox">
						<input type="checkbox" value="4" id="checkbox-2" name="4">
						<label for="checkbox-2">4</label>
					</div>

					<div class="mt-4 text-center">
						<button type="submit" class="btn btn-info btn-lg mr-2">Entrar</button>
						<a href="/" class="btn btn-secondary ml-2">Cancelar</a>
					</div>

				</form>    
			</div>

		</div>
	</div>

	@stop
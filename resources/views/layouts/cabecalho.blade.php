<!-- <div class="container">
	<div class="row">
		<div class="col-xl-12">
			<div id="Layer1" style="left:10px; top:20px; width:50%; height:500px; z-index:1; overflow: auto">
				Vc pode colocar o texto q quiser aki, e a rolagem aparecer&aacute; c necess&aacute;rio
				Vc pode colocar o texto q quiser aki, e a rolagem aparecer&aacute; c necess&aacute;rio
				Vc pode colocar o texto q quiser aki, e a rolagem aparecer&aacute; c necess&aacute;rio
				Vc pode colocar o texto q quiser aki, e a rolagem aparecer&aacute; c necess&aacute;rio
			</div>			
		</div>
	</div>
</div> -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	<!-- Brand -->
	<a class="navbar-brand" href="#"><img class="" style="width: 130px" src="./img/hemovida.png"></a>

	<!-- Toggler/collapsibe Button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Links -->
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">

		@if (isset($logado)==false)
			
				<li class="nav-item">
					<a class="nav-link" href="/hemoce">O Hemoce</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Doador</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Benefícios</a>
				</li>
				<li class="nav-item mr-5">
					<a class="nav-link" href="/sobre">Sobre Nós</a>
				</li>
			{{-- </ul>
			<ul class="navbar-nav"> --}}
				<li class="nav-item mr-3 my-lg-1">
					<a class="btn btn-outline-info btn-sm" href="login_doador">Login</a>
				</li>
				<li class="nav-item mr-3 my-lg-1">
					<a class="btn btn-outline-success btn-sm" href="cadastro_doador">Cadastro</a>
				</li>
				<li class="nav-item my-lg-1">
					<a class="btn btn-outline-light btn-sm" href="/">Doadores cadastrados</a>
				</li>
			{{-- </ul> --}}
		@else
			{{-- <ul class="navbar-nav"> --}}
				<li class="nav-item my-lg-0 mr-3 mb-2">
					<div class="dropdown">
						<button type="button" class="btn btn-outline-info dropdown-toggle btn-sm" data-toggle="dropdown">
							{{$logado}}
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="logout">Logout</a>
							{{-- <a class="dropdown-item" href="#"></a> --}}
							{{-- <a class="dropdown-item" href="#">Link 3</a> --}}
						</div>
					</div>
				</li>
				@if ($logado == "Master")
					<li class="nav-item my-lg-0 mr-3">
							{{-- <form method="post" action="cadastro_funcionario">
								{{ csrf_field() }}
								<button type="submit" class="btn btn-outline-danger btn-sm" value="{{ $logado }}" name="logado" >Cadastro funcionario</button>
							</form> --}}
							<a class="btn btn-outline-danger btn-sm" href="cadastro_funcionario">Cadastro funcionario</a>
					</li>
					<li class="nav-item my-lg-0">
							{{-- <form method="post" action="ver_funcionarios">
								{{ csrf_field() }}
								<button type="submit" class="btn btn-outline-warning btn-sm" value="{{ $logado }}" name="logado" >Funcionários cadastrados</button>
							</form> --}}
							<a class="btn btn-outline-warning btn-sm" href="ver_funcionarios">Funcionários cadastrados</a>
					</li>
				@endif
			</ul>
		@endif
		
	</div>
</nav>
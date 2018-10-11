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
		@if (isset($logado)==false)
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link my-lg-0" href="#">O Hemoce</a>
				</li>
				<li class="nav-item">
					<a class="nav-link my-lg-0" href="#">Doador</a>
				</li>
				<li class="nav-item">
					<a class="nav-link my-lg-0" href="#">Benefícios</a>
				</li>
				<li class="nav-item mr-5">
					<a class="nav-link my-lg-0" href="#">Sobre Nós</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item mr-3 my-lg-0">
					<a class="btn btn-outline-info btn-sm" href="login_doador">Login</a>
				</li>
				<li class="nav-item mr-3">
					<a class="btn btn-outline-success btn-sm" href="cadastro_doador">Cadastro</a>
				</li>
				<li class="nav-item">
					<a class="btn btn-outline-light btn-sm" href="/">Doadores cadastrados</a>
				</li>
			</ul>
		@else
			<ul class="navbar-nav">
				<li class="nav-item">
					<div class="dropdown my-lg-0">
						<button type="button" class="btn btn-outline-info dropdown-toggle btn-sm" data-toggle="dropdown">
							{{$logado}}
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Link 1</a>
							<a class="dropdown-item" href="#">Link 2</a>
							<a class="dropdown-item" href="#">Link 3</a>
						</div>
					</div>
				</li>
			</ul>
		@endif
		
	</div>
</nav>
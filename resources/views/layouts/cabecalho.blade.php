<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	<!-- Brand -->
	<a class="navbar-brand" href="/"><img class="" style="width: 130px" src="/./img/hemovida.png"></a>

	<!-- Toggler/collapsibe Button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Links -->
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		{{-- {{dd(session())}} --}}
		<ul class="navbar-nav">
			@if (session()->get('usuario')[0]['user'] === null)
				
				<li class="nav-item">
					<a class="nav-link" href="/">O Hemoce</a>
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
				<li class="nav-item mr-3 my-lg-1">
					<a class="btn btn-outline-info btn-sm" href="/login_doador">Login</a>
				</li>
				<li class="nav-item mr-3 my-lg-1">
					<a class="btn btn-outline-success btn-sm" href="/cadastro_doador">Cadastro</a>
				</li>
			@else
				@if(session()->get('usuario')[0]['user'] === "m" || session()->get('usuario')[0]['user'] === "f" || session()->get('usuario')[0]['user'] == "d")
				
					@if(session()->get('usuario')[0]['user'] === "m" || session()->get('usuario')[0]['user'] === "f")
						<li class="nav-item my-lg-0 mr-3">
								
								<a class="btn btn-outline-warning btn-sm" href="/doadoresCadastrados">Doadores</a>
						</li>
					@endif
					@if(session()->get('usuario')[0]['user'] === "m")
						<li class="nav-item my-lg-0 mr-3">
								
								<a class="btn btn-outline-warning btn-sm" href="/ver_funcionarios">Funcionários</a>
						</li>
						<li class="nav-item my-lg-0 mr-3">
								
								<a class="btn btn-outline-success btn-sm" href="/cadastro_funcionario">Cadastro funcionario</a>
						</li>
					@endif
					@if(session()->get('usuario')[0]['user'] === "d")
						<li class="nav-item my-lg-0 mr-3">									
								<a class="btn btn-outline-warning btn-sm" href="/perfil_doador">Meu perfil</a>
						</li>
					@endif
					<li class="nav-item my-lg-0 mr-3 mb-2">
						<div class="dropdown">
							<button type="button" class="btn btn-outline-info dropdown-toggle btn-sm" data-toggle="dropdown">
								{{session()->get('user')[0]['nome']}}
							</button>
							<div class="dropdown-menu">
								@if(session()->get('usuario')[0]['user'] === "m" || session()->get('usuario')[0]['user'] === "f")
									<a class="dropdown-item" href="/logout_hemoce">Logout</a>
								@elseif(session()->get('usuario')[0]['user'] == "d")
									<a class="dropdown-item" href="/logout_doador">Logout</a>
								@endif
							</div>
						</div>
					</li>	
				@endif
			@endif
		</ul>	
	</div>
</nav>

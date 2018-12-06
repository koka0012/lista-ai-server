<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Lista Ai - Login</title>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css'>
		<link rel="stylesheet" href="../css/stylelogin.css">
	</head>

	<body>
		<div class="container white z-depth-2">
			<ul class="tabs teal bgtab">
				<li class="tab col s3"><a class="white-text active" href="#login">Entrar</a></li>
				<li class="tab col s3"><a class="white-text" href="#register">Registrar</a></li>
			</ul>
			<div id="login" class="col s12">
            <form action="{{url('/validacao')}}" method="POST" class="col s12">
					<div class="form-container">
						<h3>Bem vindo</h3>
						<div class="row">
							<div class="input-field col s12">
								<input id="email" type="text" name="usuario" class="validate" required\>
								<label for="email">Usuário</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="password" type="password" name="senha" class="validate" required>
                                <label for="password">Senha</label>
							</div>
						</div>
						<br>
						<center>
							<button class="btn waves-effect waves-light teal" type="submit" name="action">Acessar</button>
						</center>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</div>
			<div id="register" class="col s12">
				<form class="col s12">
					<div class="form-container">
						<h3>Registre-se</h3>
						<div class="row">
							<div class="input-field col s12">
								<input id="last_name" type="text" class="validate">
								<label for="last_name">Razão Social / Fantasia</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="cnpjcpf" type="text" class="validate">
								<label for="cnpjcpf">CNPJ/CPF</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="user" type="text" class="validate">
								<label for="user">Usuário</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="password" type="password" class="validate">
								<label for="password">Senha</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="password-confirm" type="password" class="validate">
								<label for="password-confirm">Confirme sua senha</label>
							</div>
						</div>
						<center>
							<button class="btn waves-effect waves-light teal" type="submit" name="action">Cadastrar</button>
						</center>
					</div>
				</form>
			</div>
		</div>
		<script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js'></script>
		<script  src="../js/index.js"></script>

	</body>

</html>

<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Lista Ai - Login</title>
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" href="css/style-login.css">
	</head>

	<body>
		<div class="container white z-depth-2">
			<ul class="tabs teal bgtab fonte-title">
				<li class="tab col s3">Entrar Lista Ai</li>
			</ul>
			<div id="login" class="col s12">
                <form class="col s12" action="/login/go" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-container">
						<h3>Bem vindo</h3>
						<div class="row">
							<div class="input-field col s12">
								<input id="email" type="text" class="validate" name="user" required>
								<label for="email">Usuário</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="password" type="password" class="validate" name="pass" required>
								<label for="password">Senha</label>
                            </div>
						</div>
						<br>
						<center>
							<button class="btn waves-effect waves-light teal" type="submit">Acessar</button>
						</center>
					</div>
				</form>
			</div>

		</div>
		<script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script  src="js/index.js"></script>

	</body>

</html>

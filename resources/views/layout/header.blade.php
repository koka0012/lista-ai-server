<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Lista Ai - Home</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
		<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
		<link rel="stylesheet" href="../css/style.css">
	</head>

	<body>

		<nav>
			<div class="nav-wrapper navbg">
				<a href="/home" class="left brandlogo"><img src="../img/logo.png" alt="ListaAi" height="58"></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="/home"><b>Home</b></a></li>
					<!-- Dropdown -->
					<li><a class="dropdown-button" href="#!" data-activates="dropdown" data-beloworigin="true"><b>Produtos</b></a></li>
					<li><a href="/perfil"><b>Perfil</b></a></li>
					<li><a href="#!"><b>Sair</b></a></li>
				</ul>
			</div>
		</nav>
		<!-- Dropdown Estrutura -->
		<ul id="dropdown" class="dropdown-content">
			<li><a href="/produtos/cadastrar">Cadastrar</a></li>
			<li><a href="/produtos/listar">Listar</a></li>
		</ul>

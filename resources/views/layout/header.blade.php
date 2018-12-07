<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>

		<nav>
			<div class="nav-wrapper navbg">
				<a href="home.html" class="left brandlogo"><img src="../img/logo.png" alt="ListaAi" height="58"></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="/home"><b>Home</b></a></li>
					<!-- Dropdown -->
					<li><a class='dropdown-button' href='#' data-target='dropdown1'><b>Produtos</b></a></li>
					<li><a href="/perfil"><b>Perfil</b></a></li>
					<li><a href="/login"><b>Sair</b></a></li>
				</ul>
			</div>
		</nav>
		<!-- Dropdown Estrutura -->
		<ul id='dropdown1' class='dropdown-content'>
			<li><a href="/produtos/cadastrar">Cadastrar</a></li>
			<li><a href="/produtos/listar">Listar</a></li>
		</ul>

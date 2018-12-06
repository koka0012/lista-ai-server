@extends('layout.app')

@section('content_page')

		<header>
			<h3>DADOS <b>PERFIL</b></h3>
		</header>

		<section class="container">

			<div class="row">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
						<input id="razao" type="text" class="validate">
						<label for="razao">Razão Social / Fantasia</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="cpfcnpj" type="text" class="validate">
							<label for="cpfcnpj">CNPJ/CPF</label>
						</div>
						<div class="input-field col s3">
							<input id="telefone1" type="text" class="validate">
							<label for="telefone1">Telefone 1</label>
						</div>
						<div class="input-field col s3">
							<input id="telefone2" type="text" class="validate">
							<label for="telefone2">Telefone 2</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="endereco" type="text" class="validate">
							<label for="endereco">Endereço</label>
						</div>
						<div class="input-field col s3">
							<input id="cidade" type="text" class="validate">
							<label for="cidade">Cidade</label>
						</div>
						<div class="input-field col s3">
							<input id="uf" type="text" class="validate">
							<label for="uf">UF</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 ">
								<input id="obs" type="text" class="validate">
								<label for="obs">Observações</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<a class="waves-effect waves-light btn">Salvar</a>
						</div>
					</div>
				</form>
			</div>


		</section>
@endsection
